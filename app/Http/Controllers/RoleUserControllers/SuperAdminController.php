<?php

namespace App\Http\Controllers\RoleUserControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\customer_satisfaction;
use App\Models\Office;
use App\Models\control_number;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use DataTables;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class SuperAdminController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index()
    {
        $csf = customer_satisfaction::paginate(10);
        $csf_data = customer_satisfaction::get();
        $internal_total = customer_satisfaction::where('internal_external', '=', 1)->count();
        $external_total = customer_satisfaction::where('internal_external', '=', 2)->count();
        $user_data = User::count();

        return view('users.super_admin.index', ['csf' => $csf, 'user' => $user_data, 'csf_data' => $csf_data, 'internal_total' => $internal_total, 'external_total' => $external_total]);
    }



    /**
     *  CSF Summary page general functions.
     */
    public function csfListSummary()
    {

        $csf = customer_satisfaction::get();
        $officeCounts = Office::withCount('customer_satisfaction')->get();


        $months = [
            'january',
            'february',
            'march',
            'april',
            'may',
            'june',
            'july',
            'august',
            'september',
            'october',
            'november',
            'december'
        ];

        $firstDay = 1;
        $cutoffDay = 15;
        $currentYear = date('Y');


        for ($i = 0; $i <= 11; $i++) {
            $startingDate = $currentYear . '-' . $i + 1 . '-' . $firstDay;
            $cutOffDate = $currentYear . '-' . $i + 1 . '-' . $cutoffDay;

            $arrayStart[] = [$months[$i] => $startingDate];
            $arrayEnd[] = [$months[$i] => $cutOffDate];

            $overallCSFCount[] = DB::table('offices')->rightJoin('customer_satisfactions', 'offices.id', '=', 'customer_satisfactions.office_id')->whereBetween('csf_date', [$arrayStart[$i][$months[$i]], $arrayEnd[$i][$months[$i]]])->select('offices.*', 'customer_satisfactions.*')->count();
        }


        $groupedData = [];
        $months = range(1, 12); // List of all months
        $monthlyCSFCount = DB::table('offices')
            ->leftJoin('customer_satisfactions', function ($join) use ($currentYear) {
                $join->on('offices.id', '=', 'customer_satisfactions.office_id')
                    ->whereYear('customer_satisfactions.csf_date', $currentYear);
            })
        ->selectRaw('offices.office_name, MONTH(customer_satisfactions.csf_date) as month, COUNT(customer_satisfactions.id) as total_forms')
        ->groupBy('offices.office_name', 'month')
        ->orderBy('offices.office_name')
        ->orderBy('month')
        ->get();

        


        /**
         * 
         * For getting the feedbacks
         * 
        **/

         // Step 1: Get all offices
        $offices = DB::table('offices')->select('id', 'office_name')->orderBy('office_name')->get();


        // Step 2: Get the latest feedback for each office and month
        $feedback = DB::table('customer_satisfactions as csf')
        ->select( 'csf.office_id', 
                   DB::raw('MONTH(csf.csf_date) as month'), 
                   'csf.comments_suggestions', 
                   DB::raw('MAX(csf.csf_date) as latest_date'),
                )
        ->whereYear('csf.csf_date', $currentYear)
        ->groupBy('csf.office_id', 'month', 'csf.comments_suggestions')
        ->orderBy('csf.office_id')
        ->orderBy('month')
        ->get();


        // Step 3: Organize data into an associative array
        $officeData = [];
        foreach ($offices as $office) {
            $officeData[$office->office_name] = array_fill(1, 12, " - - - "); // Default all months to "No Comments"
        }


        // Step 4: Insert actual feedback into the structured array
        foreach ($feedback as $item) {
            $officeName = $offices->firstWhere('id', $item->office_id)?->office_name;
            if ($officeName) {
                $officeData[$officeName][$item->month] = $item->comments_suggestions;
            }
        }


        // Fill missing months with zeroes
        foreach ($monthlyCSFCount as $data) {
            $groupedData[$data->office_name][$data->month ?? 0] = $data->total_forms;
        }


        // Convert structured data back to a collection
        $monthlyCSFCount = collect([]);
        foreach ($groupedData as $office => $monthsData) {
            foreach ($monthsData as $month => $totalForms) {
                $monthlyCSFCount->push((object)[
                    'office_name' => $office,
                    'month' => $month,
                    'total_forms' => $totalForms
                ]);
            }
        }




        /**
         * 
         * For getting the Age
         * 
        **/
        $ages = DB::table('customer_satisfactions as csf')
            ->select(
                DB::raw('MONTH(csf.csf_date) as month'),
                DB::raw('JSON_ARRAYAGG(csf.age) as ages')
            )
        ->whereYear('csf.csf_date', now()->year)
        ->groupBy('month')
        ->orderBy('month')
        ->get();




        





        // Return view to blade
        return view('users.super_admin.summary_module.csfListSummary', [
            'csf' => $csf,
            // 'office_data' => $office,
            'office_count' => $officeCounts,
            'overallCSFCount' => $overallCSFCount,
            'monthlyCSFCount' => $monthlyCSFCount,
            'groupedData' => $groupedData,
            'officeData' => $officeData
        ]);
    }



    /**
     * Display the List view for all offices.
     */
    public function offices()
    {
        $office = Office::with('customer_satisfaction')->paginate(10);
        return view('users.super_admin.settings.office_module.office_details', ['office' => $office]);
    }


    /**
     * Creat or add new offices.
     */
    public function office_Create()
    {
        return view('users.super_admin.settings.office_module.office_create');
    }


    /**
     * Create or add new offices.
     */
    public function office_Store(Request $request)
    {
        $validated = $request->validate([
            'office_name' => 'required',
        ]);

        $office_name_input = $validated['office_name'];


        Office::create([
            'office_name' =>  $office_name_input
        ]);

        Alert::success('Success', 'Added new office section');
        return redirect(route('super.office'));
    }


    /**
     * Edit view of the selected office.
     */
    public function office_edit(Office $id)
    {
        return view('users.super_admin.settings.office_module.office_edit', ['office' => $id]);
    }


    /**
     * Save edit view of the selected office.
     */
    public function office_edit_save(Request $request, Office $id)
    {
        $request->validate([
            'office_name' => 'required',
        ]);

        $id->update($request->all());

        Alert::success('Success', 'Edit made on selected office section');
        return redirect(route('super.office'));
    }


    /**
     * Set new control number.
     */
    public function controlNumber()
    {
        $control_number_data = control_number::with('section')->get();
        return view('users.super_admin.settings.office_module.control_number.control_numbers', ['control_number' => $control_number_data]);
    }


    public function setNewControlNumber()
    {
        $selectOffice = Office::all();
        return view('users.super_admin.settings.office_module.control_number.create_control_number', ['selectOffice' => $selectOffice]);
    }


    public function storeControlNumber(Request $request)
    {
        $validated = $request->validate([
            'section_office' => 'required',
            'control_number_year' => 'required',
            'control_number_month' => 'required',
            'control_number_count' => 'required',
        ]);


        control_number::create([
            'section_office' => $validated['section_office'],
            'control_number_year' => $validated['control_number_year'],
            'control_number_month' => $validated['control_number_month'],
            'control_number_count' => $validated['control_number_count']
        ]);

        Alert::success('Control number', 'Section control number set!');
        return redirect(route('super.control.number'));
    }






    /**
     * Display the User profile.
     */
    public function profile()
    {
        $role_id = Auth::user()->role_id;

        switch ($role_id) {
            case 1:
                $role_name = "User";
                break;

            case 2:
                $role_name = "Admin";
                break;

            case 3:
                $role_name = "Super admin";
                break;
        }

        return view('users.super_admin.settings.index_profile', ['role_name' => $role_name, 'user_data' => Auth::user()]);
    }




    /**
     * Display the List view for all personnels of sections.
     */
    public function personnelList()
    {

        $personnels = User::with('office')->get();
        $assigned_personnel = User::with('office')->where('is_focal', 1)->get();

        return view('users.super_admin.settings.personnel_module.personnelList', ['personnels' => $personnels, 'assigned_personnel' => $assigned_personnel]);
    }


    /**
     * Display the add of personnel/new user.
     */
    public function AddNewPersonnel()
    {
        return view('users.super_admin.settings.personnel_module.create_new_profile', ['office' => Office::all()]);
    }


    /**
     * Store the new user
     */
    public function saveNewPersonnel(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'office_id' => ['required']
        ]);

        User::create([
            'first_name' => strtoupper($request->first_name),
            'last_name' => strtoupper($request->last_name),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'office_id' => $request->office_id
        ]);

        Alert::success('Personnel created', 'New personnel created');
        return redirect(route('super.personnel'));
    }


    /**
     * Delete user.
     */
    public function deletePersonnel($id)
    {
        $decrypted_user = Crypt::decryptString($id);
        $delete_user = User::find($decrypted_user);
        $delete_user->delete();

        Alert::success('Success', 'User deleted');
        return redirect()->back();
    }




    public function restorePersonnelSource(Request $request)
    {
        if ($request->ajax()) {
            $query = User::onlyTrashed()->select(['id', 'first_name', 'last_name', 'deleted_at']); // Select only needed columns
    
            return \DataTables::of($query)
                ->addIndexColumn() // Optional: Adds auto-incrementing index
                ->make(true);
        }
    }


    public function restorePersonnel(Request $request){

        $user_id = User::withTrashed()->where('id',$request->userid)->first();
        

        if ($user_id) {
            $user_id->restore();
            return response()->json([
                'success' => true,
                'message' => 'User restored successfully!'
            ]);
        }
    
        return response()->json([
            'success' => false,
            'message' => 'User not found!'
        ], 404);


        return response()->json();
    }



    public function assignFocal($id){
        $decrypted_user = Crypt::decryptString($id);
        $assignedUser = User::find($decrypted_user);

        $assignedUser->update([
            'is_focal' => 1,
            'assignind_TimeStamp' => now()
        ]);

        Alert::success('Success', 'User assigned as focal');
        return redirect()->back();
    }




    /**
     * Display the print summary.
     */
    public function printSummary()
    {
        $csf_data = customer_satisfaction::get();
        return view('users.super_admin.csf_summary', ['csf_data' => $csf_data]);
    }


    public function getIdForModal(Request $request)
    {
        $data_id = $request->id;
        $csf_retrieved_data = customer_satisfaction::where('id', $data_id)->first();
        $toJsonFormat = json_encode($csf_retrieved_data);

        return $toJsonFormat;
    }


    /**
     * Message requests.
     */
    public function messageRequestsView(){
        return view('users.super_admin.message_requests.index');
    }



    /**
     * tasks view.
     */
    public function tasksView(){
        return view('users.super_admin.tasks.index');
    }
}

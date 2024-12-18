<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\customer_satisfaction;
use App\Models\Office;
use App\Models\control_number;

use RealRashid\SweetAlert\Facades\Alert;


class SuperAdminController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index()
    {
        $csf = customer_satisfaction::paginate(10);
        $csf_data = customer_satisfaction::get();
        $internal_total = customer_satisfaction::where('internal_external', '=', 1 )->count();
        $external_total = customer_satisfaction::where('internal_external', '=', 2 )->count();
        $user_data = User::count();
     
        return view('super_admin.index', [ 'csf' => $csf, 'user' => $user_data, 'csf_data' => $csf_data, 'internal_total' => $internal_total, 'external_total' => $external_total ]);
    }

    
    /**
     * Display the CSF Lists.
     */
    public function csfList(){

        $csf = customer_satisfaction::paginate(10);
        $office = Office::with('customer_satisfaction')->get();

        $firstDay = 01;
        $cutoffDay = 16;
        $lastDay = date('t');
        $currentYear = date('Y');

        for($i = 0; $i < 12; $i++){
            $startingDate = $currentYear . '-' . $i + 1 . '-' . $firstDay;
            $endingDate = $currentYear . '-' . $i + 1 . '-' . $cutoffDay;

            $monthRange = customer_satisfaction::whereBetween('csf_date', [$startingDate, $endingDate])->get();
            
        }

        dd();
        
        
        return view('super_admin.csfList', [ 'csf' => $csf, 'office' => $office,  'monthRange' => $monthRange ]);
    }


    /**
     * Display the User profile.
     */
    public function profile(){
        $role_id = Auth::user()->role_id;

        switch($role_id){
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

        return view('super_admin.profile', [ 'role_name' => $role_name, 'user_data' => Auth::user() ]);
    }


    /**
     * Display the List view for all offices.
     */
    public function officeDetails()
    {
        $office = Office::with('customer_satisfaction')->paginate(10);

        return view('super_admin.office.officeDetails', [ 'office' => $office]);
    }
     

    /**
     * Creat or add new offices.
     */
    public function office_create()
    {
        return view('super_admin.office.office_create');
    }


    /**
     * Create or add new offices.
     */
    public function office_store(Request $request)
    {
        $validated = $request->validate([
            'office_name' => 'required',
        ]);

        $office_name_input = $request->input('office_name');


        Office::create([
            'office_name' =>  $office_name_input
        ]);

        Alert::success('Success', 'Added new office section');
        return redirect( route('super.office') );
    }
    

    /**
     * Edit view of the selected office.
     */
    public function office_edit(Office $id)
    {
        return view('super_admin.office.office_edit', [ 'office' => $id]);
    }


    /**
     * Save edit view of the selected office.
     */
    public function office_edit_save(Request $request, Office $id)
    {
        $validated = $request->validate([
            'office_name' => 'required',
        ]);

        $id->update($request->all());
        
        Alert::success('Success', 'Edit made on selected office section');
        return redirect(route('super.office'));
    }



    /**
     * Display the List view for all personnels of sections.
     */
    public function personnelList(){

        $personnels = User::with('office')->get();
        return view('super_admin.personnelList', [ 'personnels' => $personnels]);
    }


    /**
     * Display the add of new user.
     */
    public function addNewPersonnel(){

        return view('super_admin.create_new_profile', ['office' => Office::all()] );
    }


    /**
     * Store the new user
     */
    public function saveNewPersonnel(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'office_id' => ['required']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'office_id' => $request->office_id
        ]);

        Alert::success('Personnel created', 'New personnel created');
        return redirect( route('super.personnel') );

    }



    /**
     * Display the print summary.
     */
    public function printSummary()
    {
        $csf_data = customer_satisfaction::get();

        return view('super_admin.csf_summary', [ 'csf_data' => $csf_data]);
    }


    /**
     * Set new control number.
     */
    public function control_number()
    {
        $control_number_data = control_number::with('section')->get();
        return view('super_admin.control_number.control_numbers' , ['control_number' => $control_number_data]);
    }


    public function setNew_control_number()
    {
        $selectOffice = Office::all();
        return view('super_admin.control_number.create_control_number', [ 'selectOffice' => $selectOffice]);
    }


    public function store_control_number(Request $request)
    {
        control_number::create([
            'section_office' => $request->section_office,
            'control_number_year' => $request->control_number_year,
            'control_number_month' => $request->control_number_month,
            'control_number_count' => $request->control_number_count
        ]);

        Alert::success('Control number', 'Section control number set!');
        return redirect(route('control.number'));
    }


}

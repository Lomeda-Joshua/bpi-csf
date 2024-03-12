<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\customer_satisfaction;
use App\Models\Office;


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

        return view('super_admin.csfList', [ 'csf' => $csf]);
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
     * Create or add new offices.
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
     * Display the print summary.
     */
    public function printSummary()
    {
        return view('super_admin.csf_summary');
    }
}

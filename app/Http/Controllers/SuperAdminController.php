<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\customer_satisfaction;
use App\Models\Office;


class SuperAdminController extends Controller
{
    public function SuperloginAdmin(){
        return 'Super Admin';
    }


    /**
     * Display the dashboard.
     */
    public function index()
    {
        $csf = customer_satisfaction::paginate(10);
        $user = User::select('office_id')->paginate();

        return view('super_admin.index', [ 'csf' => $csf]);
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
        return view('super_admin.profile');
    }


    /**
     * Display the List view for all offices.
     */
    public function officeDetails()
    {
        $office = Office::with('customer_satisfaction')->paginate(10);

        dd($office);

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
        return view('super_admin.personnelList');
    }
}
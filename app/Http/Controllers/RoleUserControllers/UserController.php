<?php

namespace App\Http\Controllers\RoleUserControllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Office;
use App\Models\customer_satisfaction;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function index()
    {
        $office_id = Auth::user()->office_id;
        $office_user = User::with('office')->where('office_id', $office_id)->first();
        $office_data = Office::with('customer_satisfaction')->where('id', '=', $office_id )->get();
        $csf = customer_satisfaction::with('office')->where('office_id', '=', $office_id )->take(5)->get();

        $csf_total = customer_satisfaction::with('office')->where('office_id', '=', $office_id )->get();

        $internal_total = customer_satisfaction::with('office')->where('internal_external', '=', 1)->where('office_id', '=', $office_id )->get();
        $external_total = customer_satisfaction::with('office')->where('internal_external', '=', 2 )->where('office_id', '=', $office_id )->get();

        $max_created = customer_satisfaction::with('office')->max('created_at');
        $min_created = customer_satisfaction::with('office')->min('created_at');
        $total_month = customer_satisfaction::where('office_id', '=', $office_id )->whereBetween('created_at', [ $min_created, $max_created ])->get();

        return view('users.public_users.index', [ 'office_data' => $office_data, 'csf' => $csf , 'office_user' => $office_user, 'csf_total' => $csf_total, 'internal_total' => $internal_total, 'external_total' => $external_total, 'total_month'  => $total_month ]);
    }

    public function csfList()
    {
        $office_id = Auth::user()->office_id;
        $csf = customer_satisfaction::with('office')->where('office_id', '=', $office_id )->get();
        
        
        return view('users.public_users.csfList', [ 'csf' => $csf ]);
    }

    public function profile()
    {
        $role_id_check = User::where( 'role_id', 'LIKE', '3%' )->count();     
        $profile = Auth::user();        

        return view('users.public_users.profile', [ 'profile' => $profile,  'role_id_check' => $role_id_check ]);
    }
    
    
    public function profile_update(Request $request, User $id )
    {
        $profile = Auth::user();
        $profile_update = $request->all();
        $id->update($profile_update);

        Alert::success('Success', 'User account set to Super admin');
        return redirect('/');
    }

    
    public function officeDetails()
    {
        return view('users.public_users.officeDetails');
    }

    /**
     * Display the print summary.
     */
    public function printSummary(Request $request)
    {
        $startingFormat = substr($request->datefilter, 0, 10);
        $endFormat = substr($request->datefilter, 14, 23);

        $startDate = date( 'Y-m-d',strtotime($startingFormat));
        $endDate = date( 'Y-m-d' , strtotime($endFormat));

        $startDateText = date( 'F d, Y',strtotime($startingFormat));
        $endDateText = date( 'F d, Y' , strtotime($endFormat));

        $office_id = Auth::user()->office_id;
        $csf_data = customer_satisfaction::with('office')->where('office_id', '=', $office_id)->whereBetween('csf_date', [$startDate, $endDate])->get();    
        $office_user = User::with('office')->where('office_id', $office_id)->first();

        $individual = customer_satisfaction::with('office')->where('individual_group', '=', 1)->where('office_id', $office_id)->whereBetween('csf_date', [$startDate, $endDate])->get();
        $group = customer_satisfaction::with('office')->where('individual_group', '=', 2)->where('office_id', $office_id)->whereBetween('csf_date', [$startDate, $endDate])->get();



        $male = customer_satisfaction::with('office')->where('gender', '=', 1)->where('office_id', $office_id)->whereBetween('csf_date', [$startDate, $endDate])->get();
        $female = customer_satisfaction::with('office')->where('gender', '=', 2)->where('office_id', $office_id)->whereBetween('csf_date', [$startDate, $endDate])->get();

        $private = customer_satisfaction::with('office')->where('private_government', '=', 1)->where('office_id', $office_id)->whereBetween('csf_date', [$startDate, $endDate])->get();
        $government = customer_satisfaction::with('office')->where('private_government', '=', 2)->where('office_id', $office_id)->whereBetween('csf_date', [$startDate, $endDate])->get();

        
        return view('users.public_users.csf_summary', [ 'csf_data' => $csf_data, 'office_user' => $office_user, 'individual' => $individual, 'group' => $group, 'male' => $male, 'female' => $female, 'startDate' => $startDate, 'endDate' => $endDate, 'startDateText' => $startDateText, 'endDateText' => $endDateText, 'private' => $private, 'government' => $government ]);
    }


}

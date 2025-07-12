<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\customer_satisfaction;
use App\Models\Office;
use App\Models\control_number;
use RealRashid\SweetAlert\Facades\Alert;

class CsfController extends Controller
{

    public function index()
    {
        $office_data = Office::all();
        return view('customer_satisfaction_form', ['office_data' => $office_data] );
    }

    
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Hong_Kong');
        $csf_time = date('H:i:s');
        $csf_date = date('Y-m-d');


        $validated = $request->validate([
                'office_id' => 'required',
                'name' => 'required|max:190',
                'age' => 'required',
                'contact_details' => 'required|string|max:11',
                'type_and_quantity' => 'nullable|string',
                'gender' => 'required'
        ]);

        $office_id = $validated['office_id'];
        $name = $validated['name'];
        $age = $request->input('age');
        $gender = $validated['gender'];
        $contact_details =  $validated['contact_details'];
        $individual_group = $request->input('individual_group');
        $nameOFAgency = $request->input('nameOFAgency');
        $private_government = $request->input('private_government');
        $internal_external = $request->input('internal_external');
        $type_and_quantity = $validated['type_and_quantity'];
        $criteria_quality_of_goods = $request->input('criteria_quality_of_goods');
        $criteria_courteousness = $request->input('criteria_courteousness');
        $criteria_responsiveness = $request->input('criteria_responsiveness');
        $criteria_overall_experience = $request->input('criteria_overall_experience');
        $promoter_score = $request->input('promoter_score');
        $comments_suggestions = $request->input('comments_suggestions');

        /** Get variables for setting control number **/
        $control_number_count = DB::table('customer_satisfactions')->where('office_id', $office_id)->count();
        $control_number = DB::table('control_numbers')->where('section_office', $office_id)->first();


        /** Set control number **/
        if( $control_number_count == 0){
            $set_control_number = $control_number->control_number_count;
        }elseif( $control_number_count > 0){
            $set_control_number =  ($control_number_count + 1) + $control_number->control_number_count;
        }

        /** Save control number **/
        customer_satisfaction::create([
            'csf_time' => $csf_time,
            'csf_date' => $csf_date,
            'name' => $name,
            'age' => $age,
            'gender' => $gender,
            'contact_details' => $contact_details,
            'individual_group' => $individual_group,
            'private_government' => $private_government,
            'internal_external' => $internal_external,
            'name_of_agency' => $nameOFAgency,
            'types_of_goods_services' => $type_and_quantity,
            'criteria_quality_of_goods' => $criteria_quality_of_goods,
            'criteria_courteousness' => $criteria_courteousness,
            'criteria_responsiveness' => $criteria_responsiveness,
            'criteria_overall_experience' => $criteria_overall_experience,
            'promoter_score' => $promoter_score,
            'comments_suggestions' => $comments_suggestions,
            'office_id' => $office_id,
            'control_number' => $set_control_number
        ]);


        Alert::success('Customer Satisfaction Form', 'Your response is recorded');
        return redirect(route('csf.index'));
    }



}

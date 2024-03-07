<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_satisfaction;

class CsfController extends Controller
{

    public function index()
    {
        $office_name = 'information and computer section';
        $office_id = 1;

        return view('customer_satisfaction_form', ['office_name' => $office_name, 'office_id' => $office_id] );
    }

    
    public function store(Request $request)
    {
        

        $office_id = $request->input('office_id');
        $csf_time = $request->input('csf_time');
        $csf_date = $request->input('csf_date');
        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $contact_details = $request->input('contact_details');
        $individual_group = $request->input('individual_group');
        $nameOFAgency = $request->input('nameOFAgency');
        $private_government = $request->input('private_government');
        $internal_external = $request->input('internal_external');
        $type_and_quantity = $request->input('type_and_quantity');
        $criteria_quality_of_goods = $request->input('criteria_quality_of_goods');
        $criteria_courteousness = $request->input('criteria_courteousness');
        $criteria_responsiveness = $request->input('criteria_responsiveness');
        $criteria_overall_experience = $request->input('criteria_overall_experience');
        $promoter_score = $request->input('promoter_score');
        $comments_suggestions = $request->input('comments_suggestions');
        

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
        ]);

        
        return redirect(route('csf.index'))->with('message', 'success!');
        
    }



}

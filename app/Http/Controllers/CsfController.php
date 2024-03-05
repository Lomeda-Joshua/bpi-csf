<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_satisfaction;

class CsfController extends Controller
{

    public function informationComputerSection()
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
        $contact_details = $request->input('contact_details');
        $customer_category = $request->input('customer_category');
        $ifGroup = $request->input('ifGroup');
        $nameOFAgency = $request->input('nameOFAgency');
        $classification = $request->input('classification');
        $nameOFAgency = $request->input('nameOFAgency');
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
            'contact_details' => $contact_details,
            'customer_category' => $customer_category,
            'customer_type' => $ifGroup,
            'nameOFAgency' => $nameOFAgency,
            'classification' => $classification,
            'nameOFAgency' => $nameOFAgency,
            'type_and_quantity' => $type_and_quantity,
            'criteria_quality_of_goods' => $criteria_quality_of_goods,
            'criteria_courteousness' => $criteria_courteousness,
            'criteria_responsiveness' => $criteria_responsiveness,
            'criteria_overall_experience' => $criteria_overall_experience,
            'promoter_score' => $promoter_score,
            'comments_suggestions' => $comments_suggestions,
            'encoder_id' => null,
            'office_id' => $office_id,
            'control_number' => null
        ]);
        
    }

    public function humanResourcesSection()
    {
        $office_name = 'human resources section';
        $office_id = 2;

        return view('customer_satisfaction_form', ['office_name' => $office_name, 'office_id' => $office_id]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customer_satisfaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'customer_satisfactions';

    protected $fillable = [
        'csf_time',
        'csf_date',
        'name',
        'contact_details',
        'customer_category',
        'ifGroup',
        'nameOFAgency',
        'classification',
        'nameOFAgency',
        'type_and_quantity',
        'criteria_quality_of_goods',
        'criteria_courteousness',
        'criteria_responsiveness',
        'criteria_overall_experience',
        'promoter_score',
        'comments_suggestions',
        'encoder_id',
        'office_id',
        'control_number'
    ];
}

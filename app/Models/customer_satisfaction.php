<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class customer_satisfaction extends Model
{
    use HasFactory;
    use SoftDeletes;    

    protected $fillable = [
        'csf_time',
        'csf_date',
        'name',
        'age',
        'gender',
        'contact_details',
        'individual_group',
        'private_government',
        'internal_external',
        'name_of_agency',
        'types_of_goods_services',
        'criteria_quality_of_goods',
        'criteria_courteousness',
        'criteria_responsiveness',
        'criteria_overall_experience',
        'promoter_score',
        'comments_suggestions',
        'encoder_id',
        'office_id',
        'control_number',
    ];

    public function office() : belongsTo
    {
        return $this->belongsto(Office::class, 'office_id' );
    }
}

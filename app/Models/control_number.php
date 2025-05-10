<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class control_number extends Model
{
    use HasFactory;

    protected $fillable = [
        'control_number_year',
        'control_number_month',
        'control_number_count',
        'section_office'
    ];

    public function section() : belongsTo
    { 
        return $this->belongsTo( Office::class, 'section_office' );
    }

}

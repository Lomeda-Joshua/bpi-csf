<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Office extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'office_name'
    ];

    public function customer_satisfaction() : hasMany
    {
        return $this->hasMany(customer_satisfaction::class, 'office_id');
    }

    public function control_number(): hasOne
    {
        return $this->hasOne(control_number::class, 'section_office');
    }

}

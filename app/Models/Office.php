<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Office extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'office_name'
    ];

    public function customer_satisfaction() : hasMany
    {
        return $this->hasMany(customer_satisfaction::class,'office_id');
    }

}

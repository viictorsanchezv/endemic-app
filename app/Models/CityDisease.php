<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityDisease extends Model
{

    protected $table="cases_city"; 

    protected $fillable = [
        'date',
        'cases',
        'disease_id',
        'city_id'
    ];


    use HasFactory;
}

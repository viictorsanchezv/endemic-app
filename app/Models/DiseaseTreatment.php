<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseaseTreatment extends Model
{
    use HasFactory;

    protected $table="disease_treatment"; 
    
    protected $fillable = [
        'treatments_id',
        'disease_id'
    ];
}

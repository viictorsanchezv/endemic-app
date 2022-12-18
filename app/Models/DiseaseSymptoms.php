<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseaseSymptoms extends Model
{
    use HasFactory;

    protected $table="disease_symptoms";

    protected $fillable = [
        'symptoms_id',
        'disease_id'
    ];


}

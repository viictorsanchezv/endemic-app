<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function disease() {
        return $this->belongsToMany(Disease::class, 'disease_symptoms')->withTimestamps();
    }

}

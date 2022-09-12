<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];


    public function causes() {
        return $this->belongsToMany(Cause::class, 'cause_disease')->withTimestamps();
    }

    public function symptoms() {
        return $this->belongsToMany(Symptom::class, 'disease_symptoms')->withTimestamps();
    }

    public function treatments() {
        return $this->belongsToMany(Treatment::class, 'treatment_disease')->withTimestamps();
    }
}

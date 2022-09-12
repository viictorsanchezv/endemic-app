<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CauseDisease extends Model
{
    use HasFactory;

    protected $table="cause_disease";

    protected $fillable = [
        'cause_id',
        'disease_id'
    ];

}

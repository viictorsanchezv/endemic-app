<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'aedic_index',
        'temperature',
        'humidity',
        'population',
        'state_id',
    ];

    public function parish() {
        return $this->hasMany(State::class, 'parish_id', 'id');
    }


}

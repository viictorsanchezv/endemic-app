<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'country_id'
    ];

    public function cities() {
        return $this->hasMany(State::class, 'state_id', 'id');
    }

}

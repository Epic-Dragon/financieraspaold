<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 
        'phone', 
        'address',
    ];

    public function prestamos()
    {
        return $this->hasMany('App\Models\Prestamo');
    }
    public function getNameClientAttribute()
    {
        return $this->name;
    }
}

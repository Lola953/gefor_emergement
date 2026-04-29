<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = ['nom'];
    public function cours()
    {
        return $this->hasMany(Cours::class);
    }
    public function apprenants()
    {
        return $this->hasMany(User::class);
    }
    //
}


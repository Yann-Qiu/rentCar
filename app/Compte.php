<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    //
    protected $fillable = ['userName','email','password'];

    public function Demande(){
        return $this->hasMany(Demande::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    //
    protected $fillable = ['car_id','compte_id','name','licence','startTime','duration','lieu','type','passengerNum'];

    public function compte()
     {
          return $this->belongsTo('App\Compte', 'compte_id', 'id');
    }
}

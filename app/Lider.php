<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lider extends Model
{
    protected $table = 'liders';  
    public $timestamps = false;
    protected $fillable = ['nombre','region','elemento']; 
    public function jugadores() 
    { 
       // cada lider va a tener alumnos 
       return $this->hasMany('App\Jugador');
    }  

    //muchos a muchos el lider va atber muchos lideres 
    public function gimnasios() 
    { 
        return $this->belongsToMany(Proyecto::Class);
    }

}


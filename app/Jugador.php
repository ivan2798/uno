<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadors';  
    public $timestamps = false;
    protected $fillable = ['nombre','region','medalla']; 
    public function lider() 
    { 
      //un jugador pertenece a un lider 
      return $this->belongsTo(Lider::class);
    }
}

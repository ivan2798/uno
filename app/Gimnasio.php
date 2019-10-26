<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gimnasio extends Model
{
    protected $table = 'gimnasios';  
    public $timestamps = false;
    protected $fillable = ['nombre','vs','hora'];  

    public function lideres() 
    { 
      return $this->belongsToMany(Lider::class);
    }
} 

//el gimnasio puede tener muchos lideres 


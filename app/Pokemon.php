<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemon';  
    public $timestamps = false;
    protected $fillable = ['nombre','vida','poder','tipo']; 

}

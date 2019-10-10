<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lider extends Model
{
    protected $table = 'liders';  
    public $timestamps = false;
    protected $fillable = ['nombre','region','elemento'];
}

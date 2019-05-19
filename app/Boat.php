<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    protected $table =  'boats';
    protected $fillable = ['id','nameBoat','price','cidade','boatSize','boatDescription'];


}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\PersonInfo;

class Hospital extends Model
{
    //
    public function personInfo(){
    	return $this->hasMany(PersonInfo::class);
    }
}

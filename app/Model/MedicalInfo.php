<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\PersonInfo;

class MedicalInfo extends Model
{
    //
    public function personInfo(){
    	return $this->belongsTo(PersonInfo::class);
    }
}

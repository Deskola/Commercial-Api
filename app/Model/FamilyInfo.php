<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\PersonInfo;

class FamilyInfo extends Model
{
    //
    public function personInfo(){
    	return $this->belongsTo(PersonInfo::class);
    }
}

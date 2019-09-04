<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use APP\Model\PersonInfo;

class TreatmentInfo extends Model
{
    //
    public function personInfo(){
    	return $this->belongsTo(PersonInfo::class);
    }
}

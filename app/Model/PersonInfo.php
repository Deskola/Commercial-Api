<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use APP\Model\Hospital;
use APP\Model\FamilyInfo;
use APP\Model\MedicalInfo;
use APP\Model\MedInfo;
use APP\Model\TreatmentInfo;


class PersonInfo extends Model
{
    //
    public function hospital(){
    	return $this->belongsTo(Hospital::class);
    }

    public function familyInfo(){
    	return $this->hasOne(FamilyInfo::class);
    }

    public function medicalInfo(){
    	return $this->hasMany(MedicalInfo::class);
    }

    public function medInfo(){
    	return $this->hasMany(MedInfo::class);
    }

    public function treatmentInfo(){
    	return $this->hasMany(TreatmentInfo::class);
    }
}

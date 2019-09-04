<?php

namespace App\Http\Resources\Person;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>[$this->first_name,$this->middle_name,$this->last_name,],
            'national id'=>$this->national_id,
            'phone number'=>$this->phone_number,
            'date of birth'=>$this->d_o_b,
            'address'=>$this->address
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeAmount extends Model
{
    public function fee_amount(){
        return $this->belongsTo(feeCatagory::class,'fee_catagory_id','id');
    }
}

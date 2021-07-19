<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    //public $timestamps = false;

    // Modify value before save
    function setFullNameAttribute() {
        return $this->attributes['full_name'] = "Mr. ". $val;
    }

    function getFullNameAttribute($val) {
        return ucfirst("Not so fast ".$val);
    }

    // Modify value while retriving
    function getCreatedAtAttribute($val) {
        return date("d M, Y", strtotime($val));
    }
}

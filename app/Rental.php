<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Rental extends Model
{
    use SoftDeletes;
    
    public function status() {
    	return $this->belongsTo("\App\Status");
    }

    public function items() {
    	return $this->belongsToMany("\App\Item")->withPivot("quantity")->withTimeStamps();
    	
    }

    public function user() {
    	return $this->belongsTo("\App\User");
    }
}

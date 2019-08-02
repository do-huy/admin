<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills_People extends Model
{
    protected $table = "tbl_bills_people";
    public $timestamps = false;

    public function Bills()
    {
    	return $this->belongsTo('App\Bills','bill_people_bill_id','id');
    }	
}

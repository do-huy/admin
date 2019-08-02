<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = 'tbl_bills';
    protected $fillable = ['id','bill_name','bill_number','bill_province','bill_district','bill_ward','bill_address','user_id','bill_status','bill_people_finish','bill_is_active','created_at','updated_at'];
    public $timestamps = false;

    public function Bills_People()
    {
    	return $this->hasMany('App\Bills_People','bill_people_bill_id','id');
    }
}

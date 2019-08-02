<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    protected $table ='users';

    protected $fillable = ['id','username','email','password','lastname','firstname','remember_token','deleted_at','created_at','updated_at','province_users_name','district_users_name','ward_users_name','users_number','user_address','type','user_account_number'];
    public $timestamps = true;
}

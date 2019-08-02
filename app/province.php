<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    protected $table = 'tbl_province';
    protected $fillable = ['province_id','province_code','province_name','province_key_word','province_type','province_postcode','province_status','province_key_word_matching'];
    public $timestamps = false;
}

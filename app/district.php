<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
      protected $table = 'tbl_district';



    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'district_id';
    protected $fillable = ['district_id','district_province_id','district_key_word','district_postcode','district_code','district_name','district_type','district_status','district_key_word_matching'];
    public $timestamps = false;
}

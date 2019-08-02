<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ward extends Model
{
    protected $table = 'tbl_ward';



    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ward_id';
    protected $fillable = ['ward_id','ward_district_id','ward_code','ward_postcode','ward_name','ward_key_word','ward_type','ward_status','ward_key_word_matching','region_ward_id'];
    public $timestamps = false;
}

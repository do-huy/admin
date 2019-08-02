<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBillsPeoPleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bills_people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bill_name_people');
            $table->string('bill_number_people');
            $table->string('bill_province_people');
            $table->string('bill_district_people');
            $table->string('bill_ward_people');
            $table->string('bill_address_people');
            $table->bigInteger('bill_people_bill_id');
            $table->string('bill_long');
            $table->string('bill_wide');
            $table->string('bill_high');
            $table->string('bill_total');
            $table->string('bill_money');
            $table->string('bill_goods');
            $table->datetime('bill_date');
            $table->string('bill_note');
            $table->bigInteger('status_id');
            $table->string('bill_cod');
            $table->string('bill_sum');
            $table->string('bill_form');
            $table->string('bill_ung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_bills_people');
    }
}

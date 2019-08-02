<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bill_name');
            $table->string('bill_number');
            $table->string('bill_province');
            $table->string('bill_district');
            $table->string('bill_ward');
            $table->string('bill_address');
            $table->bigInteger('user_id');
            $table->enum('bill_status', ['New', 'Delivered','Finish']);
            $table->bigInteger('bill_people_finish');
            $table->bigInteger('bill_is_active');
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
        Schema::dropIfExists('tbl_bills');
    }
}

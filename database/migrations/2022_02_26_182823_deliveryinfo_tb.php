<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeliveryinfoTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveryinfo_tb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id' ,255);
            $table->integer('amount');
            $table->string('payment_method');
            $table->double('fees' , 8,2);
            $table->string('comments');
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
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InvoiceTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('invoice_tb', function (Blueprint $table) {
            $table->increments('invoice_id');
            $table->integer('u_id');
            $table->tinyInteger('status')->comment('0 = Cancel , 1 = Delivered, 2= Request Pending, 3= Processing,4=Return');
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

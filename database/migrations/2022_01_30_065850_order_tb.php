<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('order_tb', function (Blueprint $table) {
            $table->increments('o_id');
            $table->integer('invoice_id');
            $table->integer('p_id');
            $table->integer('quantity');
            $table->double('b_price' , 8,2);
            $table->double('mrp_price' , 8,2);
            $table->double('s_price' , 8,2);
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

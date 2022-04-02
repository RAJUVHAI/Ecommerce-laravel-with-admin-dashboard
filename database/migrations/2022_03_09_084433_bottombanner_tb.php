<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BottombannerTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bottombanner_tb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('baner_name');
            $table->string('banner_name');
            $table->string('imageone');
            $table->string('imagetwo'); 
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

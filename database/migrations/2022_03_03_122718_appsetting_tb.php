<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppsettingTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appsetting_tb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('offer_heading');
            $table->string('location');
            $table->string('email_name');
            $table->string('phone');
            $table->string('image');
            $table->string('newsletter_heading');
            $table->string('footer');
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

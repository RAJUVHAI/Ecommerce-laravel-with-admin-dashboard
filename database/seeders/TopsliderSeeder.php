<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

class TopsliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topslider_tb')->insert([
            'slider_catagoryname' => 'slidercatagoryname',
            'image'         => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}

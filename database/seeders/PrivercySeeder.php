<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;

class PrivercySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privercy_tb')->insert([
            'privercy_heading' => 'banner one',
            'privercy_desc' => 'FRUIT FRESH Vegetable 100% Organic Free Pickup and Delivery Available',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

class bottombannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bottombanner_tb')->insert([
            'baner_name' => 'banner one',
            'banner_name' => 'banner two',
            'imageone' =>'',
            'imagetwo' =>'',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class AppsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appsetting_tb')->insert([
            'offer_heading' => 'this offer heading',
            'location' => '0-49 Road 11378 New York',
            'email_name' => 'demo@gmail.com',
            'phone' =>  'numner',
            'image' =>'',
            'newsletter_heading' => 'this newsletter text',
            'footer' => 'this is footer text',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}

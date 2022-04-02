<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;
class DeliveryinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveryinfo_tb')->insert([
            'user_id' => '1',
            'amount' => '1000',
            'payment_method' =>'Bkash',
            'fees' => '200',
            'comments' => 'This is comments',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}

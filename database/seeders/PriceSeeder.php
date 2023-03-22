<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('price_origins')->insert([
            'id' => 1,
            'priceOrigin' => '190000',
            'minSaleOrigin' => '210000',
            'status' => '0',
            'created_at' => '2023-03-03 07:02:29'
        ]);
        DB::table('price_origins')->insert([
            'id' => 2,
            'priceOrigin' => '190000',
            'minSaleOrigin' => '200000',
            'status' => '1',
            'created_at' => Carbon::now()
        ]);
    }
}

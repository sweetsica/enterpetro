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
        DB::table('storages')->insert([
            'id' => 1,
            'name' => 'Kho 1',
            'totalShell' => '100',
            'totalShellMass' => '2700',
            'address' => 'Phố Thái Hà',
            'contact' => 'Hunter - 0983445823',
            'status' => '1'
        ]);
        DB::table('storages')->insert([
            'id' => 2,
            'name' => 'Kho 2',
            'totalShell' => '200',
            'totalShellMass' => '5400',
            'address' => 'Phố Trung Kính',
            'contact' => 'Paper - 0913445824',
            'status' => '1'
        ]);

    }
}

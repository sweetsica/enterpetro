<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ShellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shell_types')->insert([
            'id' => 1,
            'name' => 'Bình to 20kg',
            'code' => 'BT20',
            'massShell' => '20',
            'unitShell' => 'kg',
            'status' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('shell_types')->insert([
            'id' => 2,
            'name' => 'Bình to 25kg',
            'code' => 'BT25',
            'massShell' => '25',
            'unitShell' => 'kg',
            'status' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('shell_types')->insert([
            'id' => 3,
            'name' => 'Bình to 27kg',
            'code' => 'BT27',
            'massShell' => '27',
            'unitShell' => 'kg',
            'status' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('shell_types')->insert([
            'id' => 4,
            'name' => 'Bình to 28kg',
            'code' => 'BT28',
            'massShell' => '28',
            'unitShell' => 'kg',
            'status' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('shell_types')->insert([
            'id' => 5,
            'name' => 'Bình nhỏ 2kg',
            'code' => 'BN2',
            'massShell' => '2',
            'unitShell' => 'kg',
            'status' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('shell_types')->insert([
            'id' => 6,
            'name' => 'Bình nhỏ 3kg',
            'code' => 'BN3',
            'massShell' => '3',
            'unitShell' => 'kg',
            'status' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('shell_types')->insert([
            'id' => 7,
            'name' => 'Bình nhỏ 4kg',
            'code' => 'BN4',
            'massShell' => '4',
            'unitShell' => 'kg',
            'status' => '1',
            'created_at' => Carbon::now()
        ]);
    }
}

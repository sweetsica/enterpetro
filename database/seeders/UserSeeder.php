<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Fan Long',
            'email' => 'admin@enter.petro',
            'role' => 'admin',
            'password' => Hash::make('admin@enter.petro'),
            'created_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Kế Toán',
            'email' => 'kt@enter.petro',
            'role' => 'accounting',
            'password' => Hash::make('kt@enter.petro'),
            'created_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Sale 1',
            'email' => 's1@enter.petro',
            'role' => 'sale',
            'password' => Hash::make('s1@enter.petro'),
            'created_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Sale 2',
            'email' => 's2@enter.petro',
            'role' => 'sale',
            'password' => Hash::make('s2@enter.petro'),
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
        ]);g
    }
}

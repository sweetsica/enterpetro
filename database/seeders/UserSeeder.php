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
    }
}

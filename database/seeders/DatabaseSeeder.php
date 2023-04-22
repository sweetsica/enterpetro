<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StorageSeeder::class,/*kho và thông số*/
            ShellSeeder::class,/*loại bình*/
            PriceSeeder::class,/*data chung*/
            UserSeeder::class,/*người dùng*/
            CustomerSeeder::class,/*Khách hàng*/
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Customer;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0;$i<10;$i++)
        {
            Customer::create([
                'name' => $faker->name,
                'address'=> $faker->address,
                'phone'=> $faker->phoneNumber,
                'dob'=> $faker->dateTime,
                'totalMass'=> random_int(1,100),
                'totalShell'=> random_int(1,100),
                'totalBill'=> random_int(1,100),
                'debtMoney'=> random_int(1,100),
                'debtShell'=> random_int(1,100),
                'note'=> random_int(1,100),
            ]);
        }
    }
}

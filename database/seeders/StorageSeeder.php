<?php

namespace Database\Seeders;

use App\Models\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::create([
           'name'=>'Kho 1',
           'bt20' => '10'
        ]);
        Storage::create([
            'name'=>'Kho 2',
            'bt25' => '15'
        ]);
        Storage::create([
            'name'=>'Kho 3',
            'bt20' => '20',
            'bt25' => '25',
            'bt27' => '30',
        ]);
    }
}

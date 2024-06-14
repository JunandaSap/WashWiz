<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run()
    {
        Service::create(['name' => 'Cuci Aja', 'price' => 8000]);
        Service::create(['name' => 'Cuci Setrika', 'price' => 10000]);
        Service::create(['name' => 'Dry Laundry', 'price' => 12000]);
        Service::create(['name' => 'Cuci Karpet', 'price' => 25000]);
    }
}

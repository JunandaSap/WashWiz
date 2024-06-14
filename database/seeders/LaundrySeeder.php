<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laundries')->insert([
            [
                'name' => 'Berkah Laundry',
                'price' => 15000,
                'image' => 'images/laundry1.png',
            ],
            [
                'name' => 'Amaman Laundry',
                'price' => 14500,
                'image' => 'images/laundry2.png',
            ],
            [
                'name' => 'Bersihkan',
                'price' => 18000,
                'image' => 'images/laundry3.png',
            ],
            [
                'name' => 'Lamidi Laundry',
                'price' => 14000,
                'image' => 'images/laundry4.png',
            ],
        ]);
    }
}

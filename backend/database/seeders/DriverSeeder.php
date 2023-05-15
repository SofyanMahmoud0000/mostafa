<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => "ابو احمد",
            'card_number' => 21987984739218,
        ];

        Driver::create($data);
    }
}

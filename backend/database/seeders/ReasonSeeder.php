<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reason;

class ReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'description' => "تركيب خابور",
            'price' => 80,
        ];

        Reason::create($data);

        $data = [
            'description' => "تزويد الكاوتش",
            'price' => 10,
        ];

        Reason::create($data);

        $data = [
            'description' => "تغير زيت",
            'price' => 300,
        ];

        Reason::create($data);

        $data = [
            'description' => "تغيير زجاج امامي ",
            'price' => 1500,
        ];

        Reason::create($data);


        $data = [
            'description' => "تركيب فانوس خلفي",
            'price' => 200,
        ];

        Reason::create($data);
    }
}

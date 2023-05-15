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
            'price' => 150,
        ];

        Reason::create($data);

        $data = [
            'description' => "تزويد الكوتشي",
            'price' => 100,
        ];

        Reason::create($data);

        $data = [
            'description' => "تغير زيت",
            'price' => 50,
        ];

        Reason::create($data);
    }
}

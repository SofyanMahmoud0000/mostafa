<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Provider;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => "Mostafa provider",
            'username' => 'provider',
            'password' => 'password'
        ];

        Provider::create($data);
    }
}

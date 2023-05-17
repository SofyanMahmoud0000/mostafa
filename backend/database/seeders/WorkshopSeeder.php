<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name'    => 'Speed wheel',
            'username'      => 'workshop',
            'password'      => 'password',
            'address'       => "Dokki, mosaddak",
        ];

        User::create($data);

        $data = [
            'name'    => 'Car care',
            'username'      => 'workshop2',
            'password'      => 'password',
            'address'       => "Giza",
        ];

        User::create($data);

        $data = [
            'name'    => 'المتحدة لصيانة السيارات',
            'username'      => 'workshop3',
            'password'      => 'password',
            'address'       => "Alex",
        ];

        User::create($data);
    }
}

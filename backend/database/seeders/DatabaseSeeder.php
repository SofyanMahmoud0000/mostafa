<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(ReasonSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(WorkshopSeeder::class);
        // \App\Models\User::factory(1)->create();
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name'    => 'Speed wheel',
            'username'      => 'workshop',
            'password'      => 'password',
            'address'       => "Dokki, mosaddak",
        ];
    }
}

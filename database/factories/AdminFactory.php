<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Admin',
            'email' => 'aftdelhi@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$AsvTLaWdBKwhz01p727Rge4UVnXcBO92B/yTYLQFA/NvrZnfF6D4i', // password
          //  'remember_token' => Str::random(10),
        ];
    }
}

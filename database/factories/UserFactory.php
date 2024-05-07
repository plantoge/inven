<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;
    
    public function definition()
    {
        $faker = FakerFactory::create('id_ID');

        return [
            'name' => $faker->name,
            'username' => $faker->unique()->userName,
            'email' => $faker->unique()->freeEmail,
            // 'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => null,
            'hp' => $faker->phoneNumber,
            // 'remember_token' => Str::random(10),
        ];
    }
}

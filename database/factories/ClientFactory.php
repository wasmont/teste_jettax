<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => [
                'street' => $this->faker->streetAddress(),
                'number' => rand(1, 1000),
                'city' => $this->faker->city(),
                'postcode' => $this->faker->postcode(),
            ],
            'digitalCertificate' => $this->faker->url(),
            'digitalCertificatePassword' => Str::random(10),
            'status' => rand(0, 1)
        ];
    }
}

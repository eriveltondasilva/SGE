<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Address;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'street'       => $this->faker->streetAddress(),
            'complement'   => $this->faker->sentence(),
            'neighborhood' => $this->faker->sentence(3),
            'city'         => $this->faker->city(),
            'cep'          => $this->faker->randomNumber(8, true),
            'state'        => $this->faker->state(),
        ];
    }
}

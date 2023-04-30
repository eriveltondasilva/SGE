<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Relative;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Relative>
 */
class RelativeFactory extends Factory
{
    protected $model = Relative::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'       => $this->faker->name(),
            'email'      => $this->faker->unique()->safeEmail(),
            'telephone'  => $this->faker->cellphoneNumber(),
            'kinship'    => $this->faker->numberBetween(1, 6),
        ];
    }
}

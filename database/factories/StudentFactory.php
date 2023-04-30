<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'            => $this->faker->name(),
            'rg'              => $this->faker->rg(),
            'cpf'             => $this->faker->cpf(),
            'email'           => $this->faker->unique()->safeEmail(),
            'telephone'       => $this->faker->cellphoneNumber(),
            'nationality'     => $this->faker->country(),
            'birth_place'     => $this->faker->city(),
            'gov_benefits'    => $this->faker->sentence(10),
            'health_problems' => $this->faker->sentence(10),
            'note'            => $this->faker->text(),
            'birth_date'      => $this->faker->date('Y-m-d'),
            'gender'          => $this->faker->randomElement(['F', 'M']),
            'school_id'       => $this->faker->numberBetween(2, 3),
        ];
    }
}

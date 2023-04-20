<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    protected $model = Teacher::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => $this->faker->name(),
            'rg'          => $this->faker->rg(),
            'cpf'         => $this->faker->cpf(),
            'email'       => $this->faker->unique()->safeEmail(),
            'telephone'   => $this->faker->cellphoneNumber(),
            'nationality' => $this->faker->country(),
            'birth_date'  => $this->faker->date('Y_m_d'),
            'gender'      => $this->faker->randomElement(['F', 'M']),
            'school_id'   => $this->faker->randomElement(['2', '3']),
        ];
    }
}

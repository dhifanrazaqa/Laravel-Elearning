<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'answer' => $this->faker->sentence(mt_rand(2, 8)),
            'question_id' => mt_rand(1, 50),
            'is_correct' => mt_rand(0, 1)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseContent>
 */
class CourseContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'description' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                    ->map(fn($p) => "<p>$p</p>")
                    ->implode(''),
            'slug' => $this->faker->slug(),
            'course_id' => mt_rand(1, 10),

        ];
    }
}

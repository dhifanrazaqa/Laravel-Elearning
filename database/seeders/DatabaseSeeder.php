<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\{ User, Course, CourseContent, CourseCategory };
use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Course::factory(10)->create();
        CourseContent::factory(10)->create();
        Quiz::factory(10)->create();
        Question::factory(50)->create();
        Answer::factory(50)->create();

        CourseCategory::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        CourseCategory::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        CourseCategory::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

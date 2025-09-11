<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Questionnaire;

class QuestionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'questionnaire_id' => Questionnaire::factory(),
        ];
    }
}

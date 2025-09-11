<?php

namespace Database\Seeders;

use App\Models\Questionnaire;
use App\Models\Question;
use App\Models\Reponse;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Questionnaire::factory()
            ->count(5)
            ->has(Question::factory()
                ->count(10)
                ->has(Reponse::factory()->count(2)))
            ->create();
    }
}

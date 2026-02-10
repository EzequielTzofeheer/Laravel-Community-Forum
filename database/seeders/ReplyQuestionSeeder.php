<?php

namespace Database\Seeders;

use App\Models\ReplyQuestion;
use Illuminate\Database\Seeder;

class ReplyQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReplyQuestion::factory()->count(100)->create();
    }
}

<?php

namespace Database\Factories;

use App\Models\ReplyQuestion;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReplyQuestion>
 */
class ReplyQuestionFactory extends Factory
{
    protected $model = ReplyQuestion::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'user_id'       => User::first(),
            'question_id'   => Question::first(),
            'text'          => fake()->text(),

        ];
    }
}

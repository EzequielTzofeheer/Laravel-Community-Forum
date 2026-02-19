<?php

namespace App\Observers\Question;

use App\Models\Question;
use Illuminate\Support\Str;

class QuestionObserver
{
    /**
     * Handle the Question "created" event.
     */
    public function creating(Question $question): void
    {
        $question->slug = Str::kebab($question->subject);
    }

    /**
     * Handle the Question "updated" event.
     */
    public function updating(Question $question): void
    {
        $question->slug = Str::kebab($question->subject);
    }
}

<?php

namespace App\Livewire\Site\Timeline;

use Livewire\Component;

use App\Models\Question;

class TimelineLivewire extends Component
{
    public int $perPage = 5;

    protected $listeners = ['loadMore'];

    public function loadMore()
    {
        $this->perPage += 5;
    }

    public function myQuestions()
    {
        return Question::where('user_id', auth()->id())
                        ->withCount(['likes', 'replies'])
                        ->take($this->perPage)
                        ->get();
    }

    public function render()
    {
        return view('livewire.site.timeline.index', [
            'myQuestions' => $this->myQuestions(),
        ])->layout('layouts.site');
    }
}

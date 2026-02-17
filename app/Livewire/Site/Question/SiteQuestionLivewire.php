<?php

namespace App\Livewire\Site\Question;

use Livewire\Component;

use App\Models\Question;
use App\Http\Requests\Site\Home\StoreUpdateFormRequest;

class SiteQuestionLivewire extends Component
{
    public Question $question;

    public function mount($username)
    {
        $this->question = Question::whereRelation('user', 'username', $username)
                                    ->withCount(['likes', 'replies'])
                                    ->with(['user', 'category', 'replies'])
                                    ->firstOrFail();
    }

    protected function rules(): array
    {
        return (new StoreUpdateFormRequest())->rules();
    }

    public function render()
    {
        return view('livewire.site.question.index')
                ->title('Laravel Communyti Forum - Home')
                ->layout('layouts.site');
    }
}

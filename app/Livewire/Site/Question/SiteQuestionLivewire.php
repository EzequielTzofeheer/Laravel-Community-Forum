<?php

namespace App\Livewire\Site\Question;

use Livewire\Component;

use App\Models\Question;
use App\Models\ReplyQuestion;
use App\Http\Requests\Site\Question\StoreUpdateFormRequest;

class SiteQuestionLivewire extends Component
{
    public Question $question;

    public int $perPage = 5;
    public string $text;

    protected $listeners = ['loadMore'];

    public function loadMore()
    {
        $this->perPage += 5;
    }

    public function mount($id)
    {
        $this->question = Question::with(['user'])
                                    ->withCount(['likes', 'replies'])
                                    ->firstOrFail($id);
    }

    protected function rules(): array
    {
        return (new StoreUpdateFormRequest())->rules();
    }

    public function store()
    {
        $this->validate();

        try {

            $question = Question::where('id', $this->question->id)->firstOrFail();

            ReplyQuestion::create([
                'user_id'       => $question->user_id,
                'question_id'   => $this->question->id,
                'text'          => $this->text,
            ]);

            $this->redirectRoute('user.post', [$question->id, $question->user->username, $question->slug]);

        } catch (\Exception $e) {
            $this->showSwalError('Falha ao inserir registro: ' . $e->getMessage());
        }
    }

    public function render()
    {
        $replies = $this->question->replies()
                                    ->with('user')
                                    ->take($this->perPage)
                                    ->get();

        return view('livewire.site.question.index', [
            'replies' => $replies
        ])
        ->title('Laravel Communyti Forum')
        ->layout('layouts.site');
    }
}

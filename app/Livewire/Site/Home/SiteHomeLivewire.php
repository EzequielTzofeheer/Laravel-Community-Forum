<?php

namespace App\Livewire\Site\Home;

use Livewire\Component;

use App\Models\Question;
use App\Models\Category;
use App\Http\Requests\Site\Home\StoreUpdateFormRequest;

class SiteHomeLivewire extends Component
{
    public int $perPage = 5;
    public string $category_id;
    public string $subject;
    public string $text;

    protected $listeners = ['loadMore'];

    public function loadMore()
    {
        $this->perPage += 5;
    }

    protected function rules(): array
    {
        return (new StoreUpdateFormRequest())->rules();
    }

    public function questions()
    {
        return Question::latest()
                        ->with(['user', 'category', 'likes'])
                        ->withCount(['likes', 'replies'])
                        ->take($this->perPage)
                        ->get();
    }

    public function store(): void
    {
        $this->validate();

        try {

            Question::create([
                'user_id'       => auth()->user()->id,
                'category_id'   => $this->category_id,
                'subject'       => $this->subject,
                'text'          => $this->text,
            ]);

            $this->redirectRoute('site.home');

        } catch (\Exception $e) {
            $this->showSwalError('Falha ao inserir registro: ' . $e->getMessage());
        }
    }

    public function toggleLike($questionId)
    {
        if (! auth()->check()) {
            return $this->redirectRoute('login');
        }

        $question = Question::where('id', $questionId)->firstOrFail();

        $question->likes()->toggle(auth()->id());
    }

    public function render()
    {
        return view('livewire.site.home.index', [
            'questions' => $this->questions(),
            'categories' => Category::all(),
        ])
        ->title('Laravel Communyti Forum - Home')
        ->layout('layouts.site');
    }
}

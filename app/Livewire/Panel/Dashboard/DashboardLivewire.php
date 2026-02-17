<?php

namespace App\Livewire\Panel\Dashboard;

use Livewire\Component;

use App\Models\Question;

class DashboardLivewire extends Component
{
    public function render()
    {
        return view('livewire.panel.dashboard.index', [
            'questions' => Question::where('user_id', auth()->id())->count(),
        ])->layout('layouts.app');
    }
}

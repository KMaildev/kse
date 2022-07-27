<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class NewDetails extends Component
{

    public $new;

    public function mount($id)
    {
        $this->new = News::find($id);
    }

    public function render()
    {
        $recent_news = News::all();
        return view('livewire.news.new_details', ['new' => $this->new, 'recent_news' => $recent_news]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\News as ModelsNews;
use Livewire\Component;

class News extends Component
{
    public function render()
    {
        $news = ModelsNews::all();
        return view('livewire.news.index', ['news' => $news]);
    }
}

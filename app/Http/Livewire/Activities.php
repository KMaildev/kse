<?php

namespace App\Http\Livewire;

use App\Models\Activities as ModelsActivities;
use Livewire\Component;

class Activities extends Component
{
    public function render()
    {
        $activities = ModelsActivities::all();
        return view('livewire.activities.index', ['activities' => $activities]);
    }
}

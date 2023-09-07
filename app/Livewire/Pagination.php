<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Pagination extends Component
{
    use WithPagination;
    public function render()
    {
        $entries = \App\Models\Entry::query()->paginate(10);
        return view('livewire.pagination', ['entries' => $entries]);
    }
}

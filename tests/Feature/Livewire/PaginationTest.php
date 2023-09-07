<?php

use App\Livewire\Pagination;
use Database\Seeders\EntrySeeder;
use Livewire\Livewire;
use function Pest\Laravel\seed;

it('renders successfully', function () {
    Livewire::test(Pagination::class)
        ->assertStatus(200);
});

it('hands over the correct entries to the view', function () {
    $this->seed(EntrySeeder::class);

    $entries = \App\Models\Entry::query()->paginate(10);
    Livewire::test(Pagination::class)
        ->assertViewHas('entries', $entries);
});


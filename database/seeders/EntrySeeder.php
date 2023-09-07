<?php

namespace Database\Seeders;

use App\Models\Entry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entry::factory()
            ->count(50)
            ->create();
    }

}

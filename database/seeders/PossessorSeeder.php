<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PossessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Possessor::factory(10)->create();
    }
}

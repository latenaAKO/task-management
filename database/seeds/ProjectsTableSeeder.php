<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate
        \App\Project::truncate();
        factory(App\Project::class, 30)->create();
    }
}

<?php

// App
use App\Project;
use App\Task;
use App\BoardColumn;

// Laravel
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->resetTables();

        $projects = Project::all();

        foreach($projects as $project) {
            foreach(range(1, 5) as $column) {
                $column = $project->columns()->create(['name' => 'Column ' . $column]);

                factory(App\Task::class, 3)->create(['board_column_id' => $column->id]);
            }
        }


    }

    private function resetTables()
    {
        Task::truncate();
        BoardColumn::truncate();
    }
}

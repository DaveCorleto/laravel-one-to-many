<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// IMporto il Model
use App\Models\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        Project :: factory()
        -> count(10)
        -> make()
        -> each(function($projects) {

        $project = Project :: inRandomOrder() -> first();
        $type -> project() -> associate($project);

        $type -> save();
    });
            
    }
}

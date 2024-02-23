<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// IMporto il Model
use App\Models\Project;
use App\Models\Type;

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

        $type = Type :: inRandomOrder() -> first();
        $project -> type() -> associate($type);
    
        $project -> save();

        // $project = Project :: inRandomOrder() -> first();
        // $type -> project() -> associate($project);

        // $type -> save();
    });
            
    }
}

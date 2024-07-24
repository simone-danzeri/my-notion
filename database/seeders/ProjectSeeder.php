<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allProjects = config('projects');
        foreach($allProjects as $eachProject) {
            $newProject = new Project();
            $newProject->fill($eachProject);
            $newProject['slug'] = Str::slug($eachProject['name'], '-');
            $newProject->save();
        }
    }
}

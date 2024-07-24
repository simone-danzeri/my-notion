<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectTechnologyArray = config('project_tecnnology');
        foreach($projectTechnologyArray as $element) {
            foreach($element['technology_id'] as $technologyId) {
                DB::table('project_technology')->insert([
                    'project_id' => $element['project_id'],
                    'technology_id' => $technologyId,
                ]);
            }
        }
    }
}

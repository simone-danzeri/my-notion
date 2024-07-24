<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['FrontEnd', 'BackEnd', 'DB', 'FullStack'];
        foreach($types as $typeName) {
            $newType = new Type();
            $newType->name = $typeName;
            $newType->slug = Str::slug($newType->name . '-');
            $newType->save();
        }
    }
}

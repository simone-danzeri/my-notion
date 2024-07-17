<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grocery;

class GroceriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allGroceries = config('groceries');
        foreach($allGroceries as $grocery) {
            $newGrocery = new Grocery();
            $newGrocery->fill($grocery);
            $newGrocery->save();
        }
    }
}

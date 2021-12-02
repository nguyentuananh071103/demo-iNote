<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ["name" => "Work", "description" => "Work","user_id" => 1],
            ["name" => "Learn", "description" => "Learn", "user_id" => 2],
            ["name" => "Play", "description" => "Play", "user_id" => 2],
            ["name" => "Relax", "description" => "Relax", "user_id" => 2]
        ]);
    }
}

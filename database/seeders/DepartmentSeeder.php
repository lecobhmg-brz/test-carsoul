<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $departments = [];

        foreach (range(1, 5) as $idx){
            $departments[] = [
                'name' => "dep-$idx",
                'slug' => "d$idx",
                'created_at' => now(),    
                'updated_at' => now(),    
            ];
        }

        DB::table('departments')->insert($departments);
    }
}

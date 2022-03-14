<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarshoppingDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $many = [];

        foreach (range(1, 20) as $csx){
            foreach (range(1, 5) as $idx){
                $many[] = [
                    'carshopping_id' => $csx,
                    'department_id' => $idx,
                    'created_at' => now(),    
                    'updated_at' => now()   
                ];
            }
        }

        DB::table('carshopping_department')->insert($many);
    }
}

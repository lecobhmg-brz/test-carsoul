<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarshoppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $carshoppings = [];

        foreach (range(1, 20) as $idx){
            $document = $idx * 1000;
            $carshoppings[] = [
                'name' => "car-$idx",
                'document' => "$document",
                'created_at' => now(),    
                'updated_at' => now(),    
            ];
        }

        DB::table('carshoppings')->insert($carshoppings);

    }
}

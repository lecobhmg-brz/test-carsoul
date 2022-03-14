<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarshoppingResource;
use App\Models\Carshopping;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarshoppingController extends Controller
{
    //
    public function index()
    {
        $return = Carshopping::all();
        return CarshoppingResource::collection($return);
    
    }

    public function show(Request $request, $document){
        $return = Carshopping::where('document', $document)->first();
        
        if ($return===null){
            return response(null, 404);
        }

        return new CarshoppingResource($return);
    }

    public function store(Request $request){

        $validade = $request->validate([
            'name' => 'required|unique:carshoppings,name',
            'document' => 'required'
        ]);

        $car = Carshopping::create($request->all());
        return new CarshoppingResource($car);
    }
    
    public function store_department($car_id, $dep_id){

        $car = $this->find($car_id);
        if ($car === null){
            return response('carshopping', 404);
        }

        $dep = Department::find($dep_id);
        if ($dep === null){
            return response('department', 404);
        }

        DB::table('carshopping_department')->insertOrIgnore([
            'department_id' => $dep_id,
            'carshopping_id' => $car_id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return response(null, 201);
    }

    public function update(Request $request, $id){

        $validade = $request->validate([
            'name' => 'unique:carshoppings,name'
        ]);

        $car = $this->find($id);
        if ($car === null){
            return response(null, 404);
        }

        $car->name = $request->name===null ? $car->name : $request->name;
        $car->document = $request->document===null ? $car->document : $request->document;

        $car->save();

        return new CarshoppingResource($car);
    }

    public function destroy($id){

        $car = $this->find($id);
        if ($car === null){
            return response(null, 404);
        }

        $car->delete();

        return response()->noContent();
    }

    public function findBy(Request $request, $slug){
        $return = Department::where('slug', $slug)->first();
        
        if ($return===null){
            return response(null, 404);
        }

        return CarshoppingResource::collection($return->carshoppings);
    }

    private function find($id){
        $car = Carshopping::find($id);
        if ($car===Null){
            return Null;
        }

        return $car;
    }
}   


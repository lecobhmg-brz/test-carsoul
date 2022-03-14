<?php

namespace App\Http\Controllers;

use App\Http\Resources\DepartmentResource;
use App\Models\Carshopping;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        $return = Department::all();
        return DepartmentResource::collection($return);
    
    }

    public function show(Request $request, $slug){
        $return = Department::where('slug', $slug)->first();
        
        if ($return===null){
            return response(null, 404);
        }

        return new DepartmentResource($return);
    }

    public function findBy(Request $request, $document){
        $return = Carshopping::where('document', $document)->first();
        
        if ($return===null){
            return response(null, 404);
        }

        return DepartmentResource::collection($return->departments);
    }

    public function store(Request $request){

        $validade = $request->validate([
            'slug' => 'required|unique:departments,slug',
            'name' => 'required',
        ]);

        $dep = Department::create($request->all());
        return new DepartmentResource($dep);
    }

    public function update(Request $request, $id){

        $validade = $request->validate([
            'slug' => 'unique:departments,slug'
        ]);

        $dep = $this->find($id);
        if ($dep === null){
            return response(null, 404);
        }

        $dep->name = $request->name===null ? $dep->name : $request->name;
        $dep->slug = $request->slug===null ? $dep->slug : $request->slug;

        $dep->save();

        return new DepartmentResource($dep);
    }

    public function destroy($id){

        $dep = $this->find($id);
        if ($dep === null){
            return response(null, 404);
        }

        $dep->delete();

        return response()->noContent();
    }

    private function find($id){
        $dep = Department::find($id);
        if ($dep===null){
            return null;
        }

        return $dep;
    }
}   


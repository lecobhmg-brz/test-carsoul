<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function carshoppings(){
        return $this->belongsToMany(Carshopping::class);
    }

}

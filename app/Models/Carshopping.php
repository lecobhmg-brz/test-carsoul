<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carshopping extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'document'];

    public function departments(){
        return $this->belongsToMany(Department::class);
    }
}

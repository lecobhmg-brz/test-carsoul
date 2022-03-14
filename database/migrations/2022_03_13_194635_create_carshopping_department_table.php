<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carshopping_department', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('department_id');
            // $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            // $table->unsignedBigInteger('carshopping_id');
            // $table->foreign('carshopping_id')->references('id')->on('carshoppings')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('department_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('carshopping_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carshoppings_departments');
    }
};

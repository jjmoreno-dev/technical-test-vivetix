<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique()->index();                  
            $table->string('name');
            $table->string('description');
            $table->dateTime('date_execution');  
            $table->integer('total_tickets');
            $table->timestamps();
        });
    }
/*

El sistema debe incluir un flujo funcional para generar eventos. Esto implica la creación de una vista para ingresar la información del evento, como el 
nombre, 
la fecha, 
la descripción y la cantidad de tickets disponibles.
*/
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

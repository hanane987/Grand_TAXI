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
        Schema::create('driver_taxis', function (Blueprint $table) { // Change 'table' to 'create'
            $table->id();
            $table->integer('number_seats');
            $table->string('image');
            $table->string('typ_veicl');
            $table->integer('matricule');
            $table->integer('price');
            $table->enum('method_payment', ['cart', 'espase']);
            $table->text('description');
            $table->timestamps(); // You might want to add timestamps if they don't exist
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_taxis'); // Change 'table' to 'dropIfExists'
    }
};

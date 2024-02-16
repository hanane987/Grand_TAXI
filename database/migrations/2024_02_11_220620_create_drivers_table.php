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
    Schema::create('drivers', function (Blueprint $table) {
        $table->id();
        $table->integer('number_seats');
        $table->string('image');
        $table->string('typ_veicl');
        $table->integer('matricule');
        $table->integer('price');
        $table->enum('method_payment', ['cart', 'espase']);
        $table->text('description');
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
        Schema::dropIfExists('drivers');
    }
};

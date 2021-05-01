<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table ->string('prenom');
            $table ->string('nom',50);
            $table ->Integer('telephone');
            $table ->string('email')->unique();
            $table ->string('photo');
            $table->foreignId('classe_id')->constrained('classes');
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
        Schema::dropIfExists('etudiants');
    }
}

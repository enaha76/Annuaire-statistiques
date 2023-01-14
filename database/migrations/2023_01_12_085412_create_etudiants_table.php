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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('N°_inscription',10);
            $table->string('NNI');
            $table->string('N°_de_BAC');
            $table->string('Nom_et_prenom');
            $table->string('GENRE',);
            $table->date('date_DE_NAISSANCE');
            $table->string('NATIONALITE');
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
};

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
        Schema::create('inscrires', function (Blueprint $table) {
            $table->id();
            $table->string('année_scolaire');
            $table->foreignId('id_etudiant')
                  ->constrained('etudiants')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('id_etablissement')
                  ->constrained('etablissements')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('inscrires');
    }
};

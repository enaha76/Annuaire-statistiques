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
        Schema::create('etudiants_boursiers_etg_n_g_pa', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('annee_scolaire');
            $table->string('genre');
            $table->string('niveaux');
            $table->integer('ALGERIE')->nullable();
            $table->integer('ALLEMAGNE')->nullable();
            $table->integer('CANADA')->nullable();
            $table->integer('COTE_D_IVOIRE')->nullable();
            $table->integer('EGYPTE')->nullable();
            $table->integer('FRANCE')->nullable();
            $table->integer('MALI')->nullable();
            $table->integer('MAROC')->nullable();
            $table->integer('SENEGAL')->nullable();
            $table->integer('TUNISIE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants_boursiers_etg_n_g_pa');
    }
};

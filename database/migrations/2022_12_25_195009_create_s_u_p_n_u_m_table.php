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
        Schema::create('s_u_p_n_u_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('N°_inscription',10);
            $table->string('NNI');
            $table->string('N°_de_BAC');
            $table->string('Nom_et_prenom');
            $table->enum('GENRE',['M','F']);
            $table->date('date_DE_NAISSANCE');
            $table->string('ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE');
            $table->string('Niveau');
            $table->string('ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_ce_niveau');
            $table->string('NOM_DU_(TRONC/FILIRERE)');
            $table->string('FORMATION');
            $table->enum('Redoublant' ,['oui','non',]);
            $table->enum('BOURSIER_OU_BENEFICIANTS_D\'AIDE',['oui','non']);
            $table->enum('TRANSFERE',['oui','non']);
            $table->string('année_universitaire_de_la_première_inscription_à_l\'établissement')->nullable(true);
            $table->string('etablissement_de_provenance')->nullbale(true);
            $table->string('NATIONALITE');
            $table->string('LANGUE_DE_FORMATION');
            $table->string('annee_scolaire');
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
        Schema::dropIfExists('s_u_p_n_u_m_s');
    }
};

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
        Schema::create('effectifM_inst_d_n_g', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('institutions');
            $table->integer('effectifs');
            $table->string('genre');
            $table->string('niveaux');
            $table->string('domaine');
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
        Schema::dropIfExists('effectifM_inst_d_n_g');
    }
};

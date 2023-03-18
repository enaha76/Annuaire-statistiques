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
        Schema::create('effectifM_inst_n_g_ENS', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('annee_scolaire');
            $table->integer('nb1');
            $table->integer('nb2');
            $table->integer('nb3');
            $table->integer('nb4');
            $table->integer('nb5');
            $table->integer('nb6');
            $table->integer('nb7');
            $table->integer('nb8');
            $table->integer('nb9');
            $table->integer('nb10');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('effectifM_inst_n_g_ENS');
    }
};

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
        Schema::create('taux_reuss', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('annee_scolaire');
            $table->string('serie');
            $table->integer('nb1');
            $table->integer('nb2');
            $table->integer('nb3');
            $table->integer('nb4');
            $table->integer('nb5');
            $table->integer('nb6');
            $table->integer('nb7');
            $table->integer('nb8');
            $table->string('nb9');
            $table->string('nb10');
            $table->string('nb11');
            $table->string('nb12');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taux_reuss');
    }
};

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
        Schema::create('repartition_bourc_benf', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('annee_scolaire');
            $table->string('institutions');
            $table->integer('nb1');
            $table->integer('nb2');
            $table->string('nb3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repartition_bourc_benf');
    }
};

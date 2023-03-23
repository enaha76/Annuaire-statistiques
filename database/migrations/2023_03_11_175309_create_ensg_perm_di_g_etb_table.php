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
        Schema::create('ensg_perm_di_g_etb', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('annee_scolaire');
            $table->string('etablissements');
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
            $table->integer('nb11');
            $table->integer('nb12');
            $table->integer('nb13');
            $table->integer('nb14');
            $table->integer('nb15');
            $table->integer('nb16');
            $table->integer('nb17');
            $table->integer('nb18');
            $table->integer('nb19');
            $table->integer('nb20');
            $table->integer('nb21');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ensg_perm_di_g_etb');
    }
};

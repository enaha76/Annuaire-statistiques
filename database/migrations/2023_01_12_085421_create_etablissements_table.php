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
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('abrev');
            $table->string('tutelle')->nullable(true);
            $table->string('cotutelle')->nullable(true);
            $table->string('type');
            $table->foreignId('identifiant')->nullable(true)
                  ->constrained('etablissements')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('id_cycle')
                  ->constrained('cycles')
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
        Schema::dropIfExists('etablissements');
    }
};

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
        Schema::create('tb_archives', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->string('establishment_name');
            $table->unsignedInteger('number_of_students');
            $table->unsignedInteger('c_nbr');
            $table->unsignedInteger('ml_nbr');
            $table->unsignedInteger('nl_nbr');
            $table->string('treatment');
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
        Schema::dropIfExists('tb_archives');
    }
};

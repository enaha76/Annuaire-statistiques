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
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('abrev');
            $table->string('nom');
            $table->string('tutle');
            $table->string('co-tutle')->nullable();
            $table->boolean('privee')->default(0);
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
        Schema::dropIfExists('tables');
    }
};

/*

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
  /*  public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('abrev');
            $table->string('nom');
            $table->string('tutle');
            $table->enum('co-tutle',['co-tutle','non co-tutle']);
            $table->string('Minister-co-tutle')->nullable();
            $table->enum('privee', ['public', 'privee'])->nullable()->default('public');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  /*  public function down()
    {
        Schema::dropIfExists('tables');
    }
};

*/ 
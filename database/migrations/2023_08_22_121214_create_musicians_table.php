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
        Schema::create('musicians', function (Blueprint $table) {
            $table->id();

            $table->string("nome",100);
            $table->string("cognome",100)->nullable();
            $table->string("email",100);
            $table->string("password",100);
            $table->string("fotografia",100);
            $table->string("telefono",100);
            $table->string("regione",100);
            $table->text("descrizione",100);
            $table->string("cachet",100);
            $table->text("esperienza")->nullable();

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
        Schema::dropIfExists('musicians');
    }
};

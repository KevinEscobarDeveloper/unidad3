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
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->string("pregunta",150);
            $table->string("respuesta",150)->nullable();


            $table->foreignId('productos_id')
            ->constrained('productos')->onUpdate('cascade') ->onDelete('cascade');

            $table->foreignId('usuarios_id')
            ->constrained('usuarios')->onUpdate('cascade') ->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
};

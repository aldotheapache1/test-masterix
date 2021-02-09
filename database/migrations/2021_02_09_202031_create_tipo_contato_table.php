<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoContatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_contato', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('pessoa_id')->constrained('pessoas');
            $table->foreignId('contato_id')->constrained('contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_contato');
        $table->foreignId('pessoa_id')->constrained()->onDelete('cascade');
        $table->foreignId('contato_id')->constrained()->onDelete('cascade');
    }
}

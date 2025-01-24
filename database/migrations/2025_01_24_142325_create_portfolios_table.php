<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            # cria um campo de texto chamado titulo obrigatório
            # string 255 / text 65535 / longtext 4294967295 4GB
            $table->string('titulo')->unique();
            $table->string('descricao')->nullable(); # campo opcional
            $table->string('sobre')->nullable(); # campo opcional
            $table->string('imagem')->nullable(); # campo opcional
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
        Schema::dropIfExists('portfolios');
    }
}

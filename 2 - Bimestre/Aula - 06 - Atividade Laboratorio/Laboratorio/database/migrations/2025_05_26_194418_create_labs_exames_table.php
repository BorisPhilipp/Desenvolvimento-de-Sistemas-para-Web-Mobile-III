<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('labs_exames', function (Blueprint $table) {
            $table->id('exame_id'); //será usado para permitir edição e remoção de itens
            $table->string('nome', 100); //limita a qnt de caracteres
            $table->enum('tipo_exame', ['Sequenciamento', 'PCR', 'Microarray']); //cria um lista para fazer seleção. (ex: dropdown)
            $table->date('data_coleta');
            $table->string('laudo', 500)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('labs_exames');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('labs_exames', function (Blueprint $table) {
            $table->id('exame_id');
            $table->string('nome', 100);
            $table->enum('tipo_exame', ['Sequenciamento', 'PCR', 'Microarray']);
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

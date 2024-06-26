<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->String('nome_livro');
            $table->String('isbn_livro');
            $table->String('genero_livro');
            $table->Date('data_publ_livro');
            $table->String('capa_livro');
            $table->Integer('nr_pag_livro');
            $table->Integer('idade_rec_livro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};

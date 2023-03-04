<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->string('nome_produto', 150);
            $table->longText('descricao_produto');

            $table->foreignId('estado_produto_id')
                ->constrained('estados')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();


            $table->string('preco_produto', 15);
            $table->foreignId('cor_produto_id')
                ->constrained('cores')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('memoria_produto_id')
                ->nullable()
                ->constrained('memorias')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->integer('quantidade_produto');
            $table->foreignId('categoria_produto_id')
                ->constrained('categorias')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->integer('vendidos_produto');
            $table->string('imagem_produto');
            $table->string('frete_produto', 15);
            $table->string('data_entrega_produto', 4);
            $table->longText('nota_produto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};

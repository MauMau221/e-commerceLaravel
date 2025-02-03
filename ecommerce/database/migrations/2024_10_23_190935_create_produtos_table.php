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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('desc');
            $table->decimal('preco', 10, 2);
            $table->decimal('desconto', 10, 2);
            $table->integer('status');
            $table->string('url');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_categoria');
            $table->timestamps();
        
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
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

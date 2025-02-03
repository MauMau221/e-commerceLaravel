<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estoques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->integer('entrada')->default(0);
            $table->integer('saida')->default(0);
            $table->decimal('preco', 10, 2)->nullable();
            $table->timestamps();
        
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('estoques');
    }
};

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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subcategoria_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('nombre_producto');
            $table->decimal('precio_compra')->default(0);
            $table->decimal('precio_venta')->default(0);
            $table->string('codigo');
            $table->boolean('visible')->default(true);
            $table->boolean('control_stock')->nullable()->default(false);
            $table->string('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->string('codigo_barra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

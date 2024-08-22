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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 300)->nullable(false);
            $table->string('material', 200)->nullable(true);
            $table->string('conexiones', 200)->nullable(true);
            $table->string('rangos', 200)->nullable(true);
            $table->string('temperatura', 200)->nullable(true);
            $table->string('peso', 100)->nullable(true);
            $table->string('normasAplicables', 350)->nullable(true);
            $table->string('modelo', 100)->nullable(false);
            $table->string('categoria', 80)->nullable(false);
            $table->text('imagen')->nullable(false);
            $table->string('caracteristicas', 500)->nullable(false);
            $table->string('descripcion', 500)->nullable(false);
            $table->enum('marca', ['SETER','WIKA','PARKER','FLUKE','DEWIT','FINETEK']) -> nullable(false) -> default('SETER');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

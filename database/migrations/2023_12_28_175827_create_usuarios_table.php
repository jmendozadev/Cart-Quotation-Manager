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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 40)->nullable(false);
            $table->string('apellidoPaterno', 30)->nullable(false);
            $table->string('apellidoMaterno', 30)->nullable(false);
            $table->string('email', 50)->nullable(false);
            $table->string('password', 260)->nullable(false);
            $table->enum('tipo', ['Empleado','Cliente']) -> nullable(false) -> default('Cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};

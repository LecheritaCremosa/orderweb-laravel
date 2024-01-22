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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nombre del Usuario');
            $table->string('email')->unique()->comment('Correo Único');
            $table->string('password')->comment('Contraseña de Acceso');
            $table->foreignId('role_id')->constrained('role')->onDelete('cascade')->onUpdate('cascade');
            $table->rememberToken()->comment('Token de Recuperación Contraseña');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

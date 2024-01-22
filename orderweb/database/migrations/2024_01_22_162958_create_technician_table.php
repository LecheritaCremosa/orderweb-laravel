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
        Schema::create('technician', function (Blueprint $table) {
            $table->unsignedBigInteger('document')->primary()->comment('Cédula');
            $table->string('name', 80)->comment('Nombre Completo');
            $table->string('especiality', 50)->nullable()->comment('Especialidad');
            $table->string('phone', 30)->nullable()->comment('Teléfono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technician');
    }
};

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
        Schema::create('tblnotas', function (Blueprint $table) {
            $table->id();
            $table->string('Materia',100);
            $table->decimal('Nota',4,2);
            $table->string('Comentario')->nullable()->default('Sin comentarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblnotas');
    }
};

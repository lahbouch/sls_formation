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
        Schema::create('offres_emploi', function (Blueprint $table) {
            $table->id();
            $table->text('titre')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('active')->default(true);
            $table->text('ville')->nullable();
            $table->text('domaine')->nullable();
            $table->text('fonction')->nullable();
            $table->enum('contrat', ['cdi', 'cdd', 'anapec'])->nullable();
            $table->float('salaire')->nullable();
            $table->enum('niveau_etude', ['pas important', 'formation', 'bac', 'bac+2', 'bac+3', 'bac+5'])->nullable();
            $table->text('entreprise')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres_emploi');
    }
};

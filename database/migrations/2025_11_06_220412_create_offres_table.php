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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->nullable()->constrained('types')->onDelete('cascade');
            $table->integer('num')->nullable(); // 1, 2, 3
            $table->text('titre')->nullable();
            $table->text('intitule')->nullable();
            $table->longText('objectif')->nullable();
            $table->longText('prerequis')->nullable();
            $table->longText('programme')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};

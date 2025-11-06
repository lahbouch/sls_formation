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
        Schema::table('offres', function (Blueprint $table) {
            // Drop the existing foreign key constraint first
            $table->dropConstrainedForeignId('service_id');
            // Add type_id foreign key
            $table->foreignId('type_id')->nullable()->constrained('types')->onDelete('cascade')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('offres', function (Blueprint $table) {
            // Drop type_id foreign key
            $table->dropConstrainedForeignId('type_id');
            // Restore service_id foreign key
            $table->foreignId('service_id')->nullable()->constrained('services')->onDelete('cascade')->after('id');
        });
    }
};

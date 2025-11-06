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
        // Drop foreign key constraints first
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign(['type_id']);
            $table->dropColumn('type_id');
        });

        Schema::table('offres', function (Blueprint $table) {
            $table->dropForeign(['type_id']);
            $table->dropColumn('type_id');
        });

        // Add service_id to types table
        Schema::table('types', function (Blueprint $table) {
            $table->foreignId('service_id')->nullable()->after('id')->constrained('services')->onDelete('cascade');
        });

        // Add service_id to offres table
        Schema::table('offres', function (Blueprint $table) {
            $table->foreignId('service_id')->nullable()->after('id')->constrained('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove service_id from types
        Schema::table('types', function (Blueprint $table) {
            $table->dropForeign(['service_id']);
            $table->dropColumn('service_id');
        });

        // Remove service_id from offres
        Schema::table('offres', function (Blueprint $table) {
            $table->dropForeign(['service_id']);
            $table->dropColumn('service_id');
        });

        // Restore type_id to services
        Schema::table('services', function (Blueprint $table) {
            $table->foreignId('type_id')->nullable()->after('id')->constrained('types')->onDelete('cascade');
        });

        // Restore type_id to offres
        Schema::table('offres', function (Blueprint $table) {
            $table->foreignId('type_id')->nullable()->after('id')->constrained('types')->onDelete('cascade');
        });
    }
};

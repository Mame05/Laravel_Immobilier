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
        Schema::table('commentaires', function (Blueprint $table) {
            // Supprimez la clé étrangère existante
            $table->dropForeign(['bien_id']);

            // Ajoutez une nouvelle clé étrangère avec la suppression en cascade
            $table->foreign('bien_id')->references('id')->on('biens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commentaires', function (Blueprint $table) {
            // Supprimez la contrainte de suppression en cascade
            $table->dropForeign(['bien_id']);

            // Réajoutez la clé étrangère sans la suppression en cascade (si nécessaire)
            $table->foreign('bien_id')->references('id')->on('biens');
        });
    }
};

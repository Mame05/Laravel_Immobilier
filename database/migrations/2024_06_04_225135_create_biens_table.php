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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->enum('categorie', ['Standard', 'Moyen', 'Luxe'])->default('Standard');
            $table->string('image');
            $table->text('description');
            $table->string('adresse');
            $table->enum('statut', ['Occupé', 'Libre'])->default('Libre');
            $table->date('date_ajout');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};

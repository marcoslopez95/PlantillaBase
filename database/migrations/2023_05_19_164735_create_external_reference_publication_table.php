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
        Schema::create('external_reference_publication', function (Blueprint $table) {
            $table->id();
            $table->foreignId('external_reference_id')->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
            $table->foreignId('publication_id')->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('external_reference_publication');
    }
};

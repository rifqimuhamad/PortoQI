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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrsations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

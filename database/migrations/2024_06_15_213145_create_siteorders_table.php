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
        Schema::create('siteorders', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->longText('description');
            $table->string('url');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siteorders');
    }
};

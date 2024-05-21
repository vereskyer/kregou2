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
        Schema::create('shoporders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('store_name');
            $table->string('building');
            $table->string('floor');
            $table->string('position');
            $table->string('phone')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->string('admin_note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoporders');
    }
};

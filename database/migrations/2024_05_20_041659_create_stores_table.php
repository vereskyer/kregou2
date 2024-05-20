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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->foreignId('building_id')->constrained('buildings')->onDelete('cascade');
            $table->string('floor');
            $table->string('position');
            $table->string('phone')->nullable();
            $table->string('handphone')->nullable();
            $table->string('kakao')->nullable();
            $table->string('wechat')->nullable();
            $table->string('line')->nullable();
            $table->string('telegram')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('ks_story')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};

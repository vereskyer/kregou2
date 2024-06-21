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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('korean_name')->nullable();
            $table->string('specification')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->longText('description')->nullable();
            $table->integer('wholesale_price');
            $table->integer('supply_price')->nullable();
            $table->integer('quantity')->default(1000);
            $table->boolean('active')->default(true);
            $table->string('url')->nullable();
            $table->string('admin_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

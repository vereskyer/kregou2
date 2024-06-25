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
        Schema::table('order_items', function (Blueprint $table) {
            $table->timestamp('ordered_at')->nullable();
            $table->timestamp('arrived_at')->nullable();
            $table->timestamp('shipped_at')->nullable();
            $table->timestamp('out_of_stock_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropColumn(['ordered_at', 'arrived_at', 'shipped_at', 'out_of_stock_at']);
        });
    }
};

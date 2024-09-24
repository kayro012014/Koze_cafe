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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id('inventory_id');
            $table->string('category_name')->nullable();
            $table->string('ingredients')->nullable();
            $table->string('image')->nullable();
            $table->string('stocks')->nullable();
            $table->string('stocks_left')->nullable();
            $table->date('expiration_date')->nullable();
            $table->date('date_added')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};

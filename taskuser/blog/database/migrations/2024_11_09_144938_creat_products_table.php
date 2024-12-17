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
        Schema::create('products', function (Blueprint $table)
        {

            $table->id();
            $table->string('name');
            $table->integer('quantity');
            $table->string('image');
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->string('description');
            $table->string('teacher');

            
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

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
        Schema::create('items', function (Blueprint $table) {
            $table->integer('id_items', true);
            $table->integer('id_categories'); 
            $table->integer('id_colors');
            $table->integer('id_images');
            $table->integer('id_brands');
            $table->integer('id_size');
            $table->string('items_name');
            $table->string('items_name_slug');
            $table->enum('genders', ['male', 'female', 'kids', 'unisex']);
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

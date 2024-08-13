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
        Schema::create('coupons_items', function (Blueprint $table) {
            $table->integer('id_coupon', true);
            $table->string('coupon_code'); 
            $table->enum('discount_type', ['precentage', 'fixed_amount']);
            $table->integer('discount_value'); 
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('usage_limit');
            $table->integer('used_count');
            $table->enum('is_active', ['active', 'inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons_items');
    }
};

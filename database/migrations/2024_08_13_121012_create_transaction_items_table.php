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
        Schema::create('transaction_items', function (Blueprint $table) {
            $table->integer('id_transaction', true);
            $table->integer('id_users');
            $table->integer('id_coupon'); 
            $table->datetime('transaction_date');
            $table->integer('total_amount');
            $table->enum('payment_method', ['paypal', 'direct_check']);
            $table->string('shipping_address');
            $table->string('billing_address')->nullable();
            $table->enum('status', ['pending', 'delivered', 'completed']);
            $table->integer('shipping_cost');
            $table->integer('tax_amount');
            $table->integer('discount_amount');
            $table->integer('final_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_items');
    }
};

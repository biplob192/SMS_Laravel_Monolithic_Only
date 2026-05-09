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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();

            // Relations
            $table->string('tenant_id');
            $table->foreignId('plan_id')->constrained()->cascadeOnDelete();

            // Subscription lifecycle
            $table->timestamp('start_date');
            $table->timestamp('end_date')->nullable();

            $table->enum('status', [
                'active',
                'trial',
                'expired',
                'canceled',
                'paused'
            ])->default('trial');

            // Payment info
            $table->string('payment_method')->nullable();
            $table->decimal('amount', 10, 2)->nullable();

            // Optional tracking
            $table->string('transaction_id')->nullable();

            $table->timestamps();

            // $table->foreign('tenant_id')
            //       ->references('id')
            //       ->on('tenants')
            //       ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};

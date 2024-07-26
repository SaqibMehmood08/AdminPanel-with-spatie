<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outlet_id');
            $table->timestamp('order_placed')->useCurrent();
            $table->timestamp('order_places')->nullable();
            $table->timestamp('ready_to_deliver')->nullable();
            $table->timestamp('order_pickup_time')->nullable();
            $table->timestamp('order_delivered')->nullable();
            $table->string('customer_name')->nullable();
            $table->date('order_date')->default(DB::raw('CURDATE()'));
            $table->string('type')->nullable();
            $table->string('schedule_time')->nullable();
            $table->integer('sub_total')->nullable();
            $table->integer('order_tip')->default(0);
            $table->string('order_tip')->default('Order placed');
            $table->enum('payment_status', ['Completed', 'Uncompleted'])->default('Uncompleted');
            $table->string('payment_method')->nullable();
            $table->string('product_name')->nullable();
            $table->integer('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('floor')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->integer('mobile')->nullable();
            $table->integer('post_code')->nullable();
            $table->text('delivery_notes')->nullable();
            $table->text('delivery_address')->nullable();
            $table->string('email')->nullable();
            $table->string('delivery_weight_charges')->nullable();
            $table->string('transection_charges')->nullable();




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('customer_name', 128);
            $table->string('customer_mobile', 32);
            $table->text('customer_address');
            $table->decimal('total_amount', 11, 2);
            $table->decimal('discount_amount', 11, 2);
            $table->decimal('paid_amount', 11, 2);
            $table->string('payment_status',32)->default('pending');
            $table->text('payment_details')->nullable();
            $table->string('order_status',32)->default('pending');
            $table->text('note')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

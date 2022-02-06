<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderlogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->integer('order_code');
            $table->string('product_id');
            $table->string('amount');
            $table->integer('quantity');
            $table->foreignId('customer_id');
            $table->foreignId('user_id');
            $table->string('status');
            $table->string('action_at');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderlogs');
    }
}

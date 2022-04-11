<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('product_id')->nullable();
            $table->integer('seller_id');
            $table->dateTime('order_date');
            $table->dateTime('finish_date');
            $table->date('months');
            $table->integer('price')->default(0);
            $table->float('total')->default(0);
            $table->string('payment',150)->default('pay at the door');
            $table->string('ip',150);
            $table->string('note',150)->nullable();
            $table->string('status',150)->default('New');
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
        Schema::dropIfExists('orders');
    }
};

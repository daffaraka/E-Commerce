<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('timeout');
            $table->text('address');
            $table->text('regency');
            $table->text('province');
            $table->integer('total');
            $table->integer('shipping_cost');
            $table->integer('sub_total');
            $table->unsignedBigInteger('user_id');
            $table->text('proof_of_payment')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->text('status');
            
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
        Schema::dropIfExists('transactions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonusTransactionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonus_transaction_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('reciever_id'); //user recieving the bonus in question
            $table->integer('payer_id');
            $table->string('referral_bonus')->nullable();
            $table->string('overflow_bonus')->nullable();
            $table->timestamps();

            $table->foreign('reciever_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonus_transaction_histories');
    }
}
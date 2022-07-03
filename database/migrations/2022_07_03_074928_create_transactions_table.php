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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id', false, true);
            $table->string('transaction_id');
            $table->string('invoice_no');
            $table->string('ack');
            $table->string('amt');
            $table->string('payer_id');
            $table->string('payer_firtsname');
            $table->string('payer_lastname');
            $table->string('payer_email');
            $table->string('payer_status');
            $table->string('country_code');
            $table->text('short_msg');
            $table->text('long_msg');
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
};

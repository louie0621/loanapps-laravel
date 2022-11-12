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
        Schema::create('tbl_customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('middleinitial')->nullable();
            $table->string('lastname')->nullable();
            $table->string('co_firstname')->nullable();
            $table->string('co_middleinitial')->nullable();
            $table->string('co_lastname')->nullable();
            $table->string('daterelease')->nullable();
            $table->string('loanamount')->nullable();
            $table->string('loanpercent')->nullable();
            $table->string('loanperiod')->nullable();
            $table->string('loanmethod')->nullable();
            $table->string('totalamount')->nullable();
            $table->string('paymentrate')->nullable();
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
        Schema::dropIfExists('tbl_customers');
    }
};

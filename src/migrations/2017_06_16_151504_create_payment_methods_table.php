<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_payment_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('c_code')->unique;
            $table->string('c_description');
            $table->string('c_status');
            $table->string('c_user');
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
        Schema::drop('tbl_payment_methods');
    }
}

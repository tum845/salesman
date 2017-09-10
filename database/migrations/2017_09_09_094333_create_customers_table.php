<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_company_name');
            $table->string('customer_address');
            $table->string('customer_province');
            $table->string('customer_city');
            $table->string('customer_postal_code');
            $table->string('customer_lat')->nullable();
            $table->string('customer_lng')->nullable();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_mobile')->nullable();
            $table->string('customer_email');
            $table->text('customer_note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}

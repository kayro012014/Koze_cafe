<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcustomerTable extends Migration
{
    public function up()
    {
        Schema::create('tblcustomer', function (Blueprint $table) {
            $table->bigIncrements('customer_id'); // Primary key
            $table->string('customerName');
            $table->string('pricingCategory')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblcustomer');
    }
}

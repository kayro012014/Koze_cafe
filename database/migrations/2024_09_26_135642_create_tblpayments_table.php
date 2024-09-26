<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('tblpayments', function (Blueprint $table) {
            $table->bigIncrements('pay_id'); // Primary key
            $table->string('paymentType');
            $table->string('reference_Num')->nullable();
            $table->decimal('totalPayment', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblpayments');
    }
}

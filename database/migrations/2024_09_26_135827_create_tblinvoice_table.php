<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblinvoiceTable extends Migration
{
    public function up()
    {
        Schema::create('tblinvoice', function (Blueprint $table) {
            $table->bigIncrements('invoice_id'); // Primary key
            $table->unsignedBigInteger('trans_ID'); // Foreign key reference
            $table->decimal('change', 10, 2); // Assuming change is a monetary value
            $table->timestamps();

            $table->foreign('trans_ID')->references('trans_ID')->on('tbltransaction')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('tblinvoice', function (Blueprint $table) {
            $table->dropForeign(['trans_ID']);
        });
        Schema::dropIfExists('tblinvoice');
    }
}

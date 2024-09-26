<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbltransactionTable extends Migration
{
    public function up()
    {
        Schema::create('tbltransaction', function (Blueprint $table) {
            $table->bigIncrements('trans_ID'); // Primary key
            $table->unsignedBigInteger('prod_id'); // Foreign key reference
            $table->unsignedBigInteger('customer_ID'); // Foreign key reference
            $table->unsignedBigInteger('pay_id'); // Foreign key reference
            $table->unsignedBigInteger('menu_Id'); // Foreign key reference
            $table->integer('qty_order');
            $table->decimal('total_price', 10, 2);
            $table->date('order_date');
            $table->time('orderTime');
            $table->timestamps();

            $table->foreign('prod_id')->references('prod_id')->on('tblproducts')->onDelete('cascade');
            $table->foreign('customer_ID')->references('customer_id')->on('tblcustomer')->onDelete('cascade');
            $table->foreign('pay_id')->references('pay_id')->on('tblpayments')->onDelete('cascade');
            $table->foreign('menu_Id')->references('menuID')->on('tblmenu')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('tbltransaction', function (Blueprint $table) {
            $table->dropForeign(['prod_id']);
            $table->dropForeign(['customer_ID']);
            $table->dropForeign(['pay_id']);
            $table->dropForeign(['menu_Id']);
        });
        Schema::dropIfExists('tbltransaction');
    }
}

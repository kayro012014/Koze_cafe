<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblproductsTable extends Migration
{
    public function up()
    {
        Schema::create('tblproducts', function (Blueprint $table) {
            $table->bigIncrements('prod_id'); // Primary key
            $table->unsignedBigInteger('category_Id'); // Foreign key reference
            $table->unsignedBigInteger('inventory_id'); // Foreign key reference
            $table->string('product_name');
            $table->decimal('prod_price', 8, 2);
            $table->timestamp('product_added')->nullable();
            $table->string('product_image')->nullable();
            $table->boolean('product_status')->default(1);
            $table->timestamps();

            $table->foreign('category_Id')->references('category_id')->on('tblcategory')->onDelete('cascade');
            $table->foreign('inventory_id')->references('invent_id')->on('tblinventory')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('tblproducts', function (Blueprint $table) {
            $table->dropForeign(['category_Id']);
            $table->dropForeign(['inventory_id']);
        });
        Schema::dropIfExists('tblproducts');
    }
}

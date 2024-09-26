<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblmenuTable extends Migration
{
    public function up()
    {
        Schema::create('tblmenu', function (Blueprint $table) {
            $table->bigIncrements('menuID'); // Primary key
            $table->unsignedBigInteger('category_id'); // Foreign key reference
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('tblcategory')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('tblmenu', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Drop foreign key first
        });
        Schema::dropIfExists('tblmenu');
    }
}

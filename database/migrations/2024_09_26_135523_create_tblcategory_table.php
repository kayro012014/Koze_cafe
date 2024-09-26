<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcategoryTable extends Migration
{
    public function up()
    {
        Schema::create('tblcategory', function (Blueprint $table) {
            $table->bigIncrements('category_id'); // Primary key
            $table->string('categoryName');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblcategory');
    }
}

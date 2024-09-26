<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblinventoryTable extends Migration
{
    public function up()
    {
        Schema::create('tblinventory', function (Blueprint $table) {
            $table->bigIncrements('invent_id'); // Primary key
            $table->string('ingredient_name');
            $table->integer('inventory_stocks');
            $table->date('restockDate')->nullable();
            $table->date('expiration_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblinventory');
    }
}


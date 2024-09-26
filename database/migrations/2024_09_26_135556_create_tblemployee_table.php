<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblemployeeTable extends Migration
{
    public function up()
    {
        Schema::create('tblemployee', function (Blueprint $table) {
            $table->bigIncrements('employee_Id'); // Primary key
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('job_role');
            $table->string('password');
            $table->text('description')->nullable();
            $table->boolean('employee_Stat')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblemployee');
    }
}

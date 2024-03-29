<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('teacherid');
            $table->string('teachername');
            $table->timestamps();
        });

        Schema::create('courses', function (Blueprint $table) {
            $table->string('coursecode')->primary();
            $table->string('coursetitle');
            $table->unsignedInteger('teacherid');
            $table->foreign('teacherid')->references('teacherid')->on('teachers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('teachers');
    }
};

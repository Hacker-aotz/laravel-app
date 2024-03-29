<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('students', function (Blueprint $table) {
        $table->id(); // Creates an auto-incrementing primary key column
        $table->string('name');
        $table->unsignedInteger('age'); // Change to unsigned integer for age
        $table->timestamps(); // Adds created_at and updated_at columns
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

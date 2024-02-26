<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrisonersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prisoners', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->date('DOB');
            $table->integer('gender');
            $table->integer('number')->unique();
            $table->string('description')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prisoners');
    }
};

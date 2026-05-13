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

        Schema::create('courses', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->integer('display_order')->default(0)->nullable();
            $table->timestamps();
        });
        Schema::create('courses_details', function (Blueprint $table) {
           $table->smallIncrements('id');
            $table->unsignedSmallInteger('courses_id');
            $table->foreign('courses_id') ->references('id')->on('courses')->onDelete('cascade');
            $table->string('title'); // Information Technology
            $table->text('description')->nullable();
            $table->string('duration')->nullable(); 
            $table->string('intakes')->nullable(); 
            $table->string('average_fees')->nullable(); 
            $table->string('image', 500)->nullable();
            $table->text('career_prospects')->nullable();
            $table->text('point_one')->nullable();
            $table->text('point_two')->nullable();
            $table->text('point_three')->nullable();
            $table->text('point_four')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('courses_details');
    }
};

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

      Schema::create('study_abroads', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->text('benefit_one')->nullable();
            $table->text('benefit_two')->nullable();
            $table->text('benefit_three')->nullable();
            $table->timestamps();
        });
         Schema::create('how_to_apply', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->integer('display_order')->default(0)->nullable();
            $table->timestamps();
        });
        Schema::create('country_abroad_details', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('study_abroads_id');
            $table->foreign('study_abroads_id')->references('id') ->on('study_abroads')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->text('benefit_one')->nullable();
            $table->text('benefit_two')->nullable();
            $table->text('benefit_three')->nullable();
            $table->text('why_study')->nullable();
            $table->text('cost_overview')->nullable();
            $table->text('intake_information')->nullable();
            $table->text('visa_process')->nullable();
            $table->text('academic_scores')->nullable();
            $table->text('english_proficiency')->nullable();
            $table->text('financial_capacity')->nullable();
            $table->timestamps();
        });

           Schema::create('universities', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('study_abroads_id');
            $table->foreign('study_abroads_id')->references('id')->on('study_abroads')->onDelete('cascade');
            $table->string('name');
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_abroads');
        Schema::dropIfExists('how_to_apply');
        Schema::dropIfExists('country_abroad_details');
        Schema::dropIfExists('universities');
    }
};

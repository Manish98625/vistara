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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->nullable();
            $table->string('address_lc')->nullable();
            $table->string('address_en')->nullable();
            $table->text('company_description')->nullable();
            $table->text('logo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkdian')->nullable();
            $table->string('wattsapp')->nullable();
            $table->text('map_location')->nullable();
            $table->timestamps();
        });
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->string('heading_text')->nullable();
            $table->string('short_description')->nullable();
            $table->boolean('is_active')->default(false)->nullable();
            $table->integer('display_order')->default(0)->nullable();
            $table->timestamps();
        });
        Schema::create('about_us', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title', 255)->nullable();
            $table->text('details', 500)->nullable();
            $table->string('file_upload', 500)->nullable();
            $table->string('image', 500)->nullable();
            $table->timestamps();
        });

      

        schema::create('our_services', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->integer('display_order')->default(0)->nullable();
            $table->timestamps();
        });

        Schema::create('services_disp', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('our_services_id');
            $table->foreign('our_services_id') ->references('id')->on('our_services')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->string('sec_title')->nullable();
            $table->text('sec_desc')->nullable();
            $table->string('short_title')->nullable();
            $table->text('point_one')->nullable();
            $table->text('point_two')->nullable();
            $table->text('point_three')->nullable();
            $table->text('point_four')->nullable();
            $table->string('point_five')->nullable();
            $table->string('point_six')->nullable();
            $table->timestamps();
        });


        Schema::create('testimonials', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('course')->nullable();
            $table->text('message')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
        Schema::dropIfExists('about_us');
        Schema::dropIfExists('banners');
        Schema::dropIfExists('our_services');
        Schema::dropIfExists('services_disp');
        Schema::dropIfExists('testimonials');
    }
};

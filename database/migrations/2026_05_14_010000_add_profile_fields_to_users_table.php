<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->string('study_destination')->nullable()->after('phone');
            $table->string('education_level')->nullable()->after('study_destination');
            $table->string('field_of_study')->nullable()->after('education_level');
            $table->string('profile_image')->nullable()->after('field_of_study');
            $table->string('role')->default('student')->after('profile_image');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone',
                'study_destination',
                'education_level',
                'field_of_study',
                'profile_image',
                'role',
            ]);
        });
    }
}

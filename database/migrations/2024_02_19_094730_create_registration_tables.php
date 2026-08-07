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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->string('dob');
            $table->string('phone');
            $table->string('email');
            $table->string('category');
            $table->string('hostel');
            $table->string('bus_facility');
            $table->string('last_exam_passes');
            $table->string('course');
            $table->string('rank')->nullable();
            $table->string('address')->nullable();
            $table->enum('status', ['unread', 'read'])->default('unread');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};

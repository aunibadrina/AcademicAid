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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->tinyInteger('is_admin')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('role', ['student', 'tutor'])->default('student');
            $table->boolean('is_approved')->default(false); // Added for tutor approval
            $table->timestamps();
            $table->string('resume_path')->nullable(); // Added for storing the path to the uploaded PDF
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

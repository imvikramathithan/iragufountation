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
        Schema::create('service_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('courses')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('logo')->nullable();
            $table->string('bg_image')->nullable();
            $table->string('quotes')->nullable();
            $table->text('description')->nullable();
            $table->string('brochure')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_student');
    }
};

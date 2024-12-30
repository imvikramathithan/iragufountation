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
        Schema::create('management_queries', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
         $table->integer('number');
          $table->string('institute');
        $table->text('query');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management_queries');
    }
};

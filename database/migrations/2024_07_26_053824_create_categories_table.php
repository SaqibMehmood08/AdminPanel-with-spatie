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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('page_url');
            $table->integer('rank')->nullable();
            $table->string('is_home')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->enum('is_exclusive', [0, 1])->default(0);
            $table->enum('is_published', [0, 1])->default(0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

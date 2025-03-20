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
        Schema::create('blog_models', function (Blueprint $table) {
            $table->id();
            $table->string('blog-title')->nullable();
            $table->string('blog-pagename')->nullable();
            $table->string('banner-image')->nullable();
            $table->string('thumbnail-image')->nullable();
            $table->string('alt-text')->nullable();
            $table->string('blog-content')->nullable();
            $table->string('blog-author')->nullable();
            $table->string('blog-date')->nullable();
            $table->string('blog-categories')->nullable();
            $table->string('blog-tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_models');
    }
};

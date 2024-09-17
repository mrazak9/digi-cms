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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('slug');
            $table->string('banner')->nullable();
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_show')->default(1);
            $table->string('type')->default('default');
            $table->text('seo_title')->nullable();
            $table->text('seo_meta_description')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};

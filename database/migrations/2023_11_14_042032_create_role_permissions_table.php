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
        // Schema::create('role_permissions', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('role_id');
        //     $table->unsignedBigInteger('role_page_id');
        //     $table->integer('access_status');
        //     $table->timestamps();

        //     // Set foreign keys
        //     $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        //     $table->foreign('role_page_id')->references('id')->on('role_pages')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_permissions');
    }
};

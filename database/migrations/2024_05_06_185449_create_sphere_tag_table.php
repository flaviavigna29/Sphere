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
        Schema::create('sphere_tag', function (Blueprint $table) {
            $table->id();
            //sphere_id
            $table->unsignedBigInteger('sphere_id')->nullable();
            $table->foreign('sphere_id')->references('id')->on('spheres');

            //tag_id
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sphere_tag');
    }
};

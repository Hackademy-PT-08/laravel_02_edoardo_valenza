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
        Schema::create('category_picture', function (Blueprint $table) {
            //Aggiungo foreign key per category id
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('cascade');
            //Aggiungo foreign key per picture id
            $table->foreignId('picture_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_picture');
    }
};

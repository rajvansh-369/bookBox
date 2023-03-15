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
        Schema::create('box_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('box_id')->constrained('boxes')->references('id')->onDelete('cascade');
            $table->foreignId('book_id')->constrained('books')->references('id')->onDelete('cascade');
            $table->integer('qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('box_books');
    }
};

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
        Schema::create('genres', function(Blueprint $table){
            $table->id('genre_id');
            $table->string('genre_name');
            $table->index('genre_name', 'idx_genre_name');
        });
        Schema::create('books', function(Blueprint $table){
            $table->id('book_id');
            $table->longText('book_cover_img')->nullable();
            $table->string('book_title');
            $table->string('book_author');
            $table->string('book_genre');
            $table->float('book_price');
            $table->foreign('book_genre','fk_book_genre')
                ->references('genre_name')->on('genres');
        });
        Schema::create('users', function(Blueprint $table){
            $table->id('user_id');
            $table->string('user_name');
            $table->longText('user_pass');
        });
        Schema::create('rented', function(Blueprint $table){
            $table->uuid('rent_id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('rent_date');
            $table->timestamp('rent_due');
            $table->foreign('book_id','fk_book_id')
                ->references('book_id')->on('books');
            $table->foreign('user_id','fk_user_id')
                ->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rented');
        Schema::dropIfExists('users');
        Schema::dropIfExists('books');
        Schema::dropIfExists('genres');
    }
};

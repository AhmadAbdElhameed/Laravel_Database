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
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->from(1000);

            // First method
//            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')
//                  ->references('id')
//                  ->on('users')
//                  ->cascadeOnDelete();

            // Second method
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->cascadeOnDelete(); // foreignId => convert id to unsigned big integer

            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('excerpt')->comment('summary of the post');
            $table->longText('description');
            $table->boolean('is_published')->default(false);
            $table->integer('min_to_read')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

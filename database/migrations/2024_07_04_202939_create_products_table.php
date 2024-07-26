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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->float('current_price');
            $table->float('previous_price');
            $table->integer('image_id');
            $table->string('code')->nullable();

            // Rating
            $table->integer('star1')->default(0);
            $table->integer('star2')->default(0);
            $table->integer('star3')->default(0);
            $table->integer('star4')->default(0);
            $table->integer('star5')->default(0);
            
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

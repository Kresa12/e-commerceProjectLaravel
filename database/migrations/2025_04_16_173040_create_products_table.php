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
            $table->unsignedBigInteger('id')->primary()->autoIncrement();

            // Kolom name
            $table->string('name', 255)->nullable(false);

            // Kolom slug
            $table->string('slug', 255)->unique();

            // Kolom description
            $table->text('description')->nullable();

            // Kolom sku
            $table->string('sku', 50)->unique();

            // Kolom price
            $table->decimal('price', 10, 2)->unsigned();

            // Kolom stock
            $table->integer('stock')->default(0)->unsigned();

            // Kolom product_category_id (foreign key)
            $table->unsignedBigInteger('product_category_id')->nullable();
            $table->foreign('product_category_id')
                  ->references('id')
                  ->on('product_categories')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            // Kolom image_url
            $table->string('image_url', 255)->nullable();

            // Kolom is_active
            $table->boolean('is_active')->default(true);

            // Timestamps
            $table->timestamps();
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

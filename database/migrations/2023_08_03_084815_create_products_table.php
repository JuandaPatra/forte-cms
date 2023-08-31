<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('lang');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('intensity')->nullable();
            $table->integer('body')->nullable();
            $table->integer('smoothness')->nullable();
            $table->integer('sensation')->nullable();
            $table->integer('category')->nullable();
            $table->string('diameter')->nullable();
            $table->string('length')->nullable();
            $table->text('images1')->nullable();
            $table->text('images2')->nullable();
            $table->timestamps();
        });

        
    }

    


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

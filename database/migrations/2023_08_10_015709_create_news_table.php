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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->integer('news_id');
            $table->string('lang');
            $table->string('title');
            $table->string('slug');
            $table->string('description1')->nullable();
            $table->string('description2')->nullable();
            $table->string('description3')->nullable();
            $table->text('content')->nullable();
            $table->string('images1')->nullable();
            $table->string('images2')->nullable();
            $table->date('date');
            $table->string('status');
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
        Schema::dropIfExists('news');
    }
};

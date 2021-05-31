<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_news', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('news_id')->nullable();
            $table->string('name')->nullable();
            $table->json('meta')->nullable();
            $table->string('path')->nullable();
            $table->bigInteger('type')->nullable();
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
        Schema::dropIfExists('file_news');
    }
}

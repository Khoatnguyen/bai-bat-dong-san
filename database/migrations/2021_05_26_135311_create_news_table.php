<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
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
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('province_id')->nullable();
            $table->bigInteger('district_id')->nullable();
            $table->bigInteger('ward_id')->nullable();
            $table->string('address')->nullable();
            $table->string('project')->nullable();
            $table->string('acreage')->nullable();
            $table->biginteger('price')->nullable();
            $table->biginteger('price_m2')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('living_rom')->nullable();
            $table->string('number_floor')->nullable();
            $table->string('direction')->nullable();
            $table->string('furniture')->nullable();
            $table->string('frontispiece')->nullable();
            $table->string('road')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->tinyInteger('status')->nullable();
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
}

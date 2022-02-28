<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuChickenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_chicken', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('chicken_breast')->default(0);
            $table->unsignedInteger('chicken_thigh')->default(0);
            $table->unsignedInteger('chicken_scissor')->default(0);
            $table->unsignedInteger('chicken_heart')->default(0);
            $table->unsignedInteger('chicken_lever')->default(0);
            $table->unsignedInteger('chicken_sand')->default(0);
            $table->unsignedInteger('chicken_wing')->default(0);
            $table->unsignedInteger('chicken_neck_skin')->default(0);
            $table->unsignedInteger('chicken_cartilage')->default(0);
            $table->unsignedInteger('chicken_tail')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_chicken');
    }
}

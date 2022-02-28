<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuFruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_fruits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('mikan')->default(0);
            $table->unsignedInteger('orange')->default(0);
            $table->unsignedInteger('melon')->default(0);
            $table->unsignedInteger('mango')->default(0);
            $table->unsignedInteger('cherry')->default(0);
            $table->unsignedInteger('apple')->default(0);
            $table->unsignedInteger('strawberry')->default(0);
            $table->unsignedInteger('pineapple')->default(0);
            $table->unsignedInteger('lemon')->default(0);
            $table->unsignedInteger('grapefruit')->default(0);
            $table->unsignedInteger('kiwifruit')->default(0);
            $table->unsignedInteger('blueberry')->default(0);
            $table->unsignedInteger('other_berries')->default(0);
            $table->unsignedInteger('watermelon')->default(0);
            $table->unsignedInteger('plum')->default(0);
            $table->unsignedInteger('persimmon')->default(0);
            $table->unsignedInteger('loquat')->default(0);
            $table->unsignedInteger('chestnut')->default(0);
            $table->unsignedInteger('grape')->default(0);
            $table->unsignedInteger('banana')->default(0);
            $table->unsignedInteger('peach')->default(0);
            $table->unsignedInteger('apricot')->default(0);
            $table->unsignedInteger('japanese_pear')->default(0);
            $table->unsignedInteger('pear')->default(0);
            $table->unsignedInteger('fig')->default(0);
            $table->unsignedInteger('pomegranate')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_fruits');
    }
}

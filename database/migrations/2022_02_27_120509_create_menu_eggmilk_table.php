<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuEggmilkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_eggmilk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('yogurt')->default(0);
            $table->unsignedInteger('milk')->default(0);
            $table->unsignedInteger('fresh_cream')->default(0);
            $table->unsignedInteger('butter')->default(0);
            $table->unsignedInteger('margarine')->default(0);
            $table->unsignedInteger('egg')->default(0);
            $table->unsignedInteger('quail_egg')->default(0);
            $table->unsignedInteger('century_egg')->default(0);
            $table->unsignedInteger('hot_spring_egg')->default(0);
            $table->unsignedInteger('smoked_egg')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_eggmilk');
    }
}

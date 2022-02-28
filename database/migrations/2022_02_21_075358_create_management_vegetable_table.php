<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementVegetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_vegetable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('asparagus')->default(0);
            $table->unsignedInteger('pumpkin')->default(0);
            $table->unsignedInteger('cabbage')->default(0);
            $table->unsignedInteger('burdock')->default(0);
            $table->unsignedInteger('satsumaimo')->default(0);
            $table->unsignedInteger('potato')->default(0);
            $table->unsignedInteger('daikon')->default(0);
            $table->unsignedInteger('banboo_shoots')->default(0);
            $table->unsignedInteger('onion')->default(0);
            $table->unsignedInteger('corn')->default(0);
            $table->unsignedInteger('tomato')->default(0);
            $table->unsignedInteger('eggplant')->default(0);
            $table->unsignedInteger('carrot')->default(0);
            $table->unsignedInteger('garlic')->default(0);
            $table->unsignedInteger('green_onion')->default(0);
            $table->unsignedInteger('green_pepper')->default(0);
            $table->unsignedInteger('broccoli')->default(0);
            $table->unsignedInteger('rakkyo')->default(0);
            $table->unsignedInteger('lettuce')->default(0);
            $table->unsignedInteger('lotus_root')->default(0);
            $table->unsignedInteger('sansai')->default(0);
            $table->unsignedInteger('chinese_cabbage')->default(0);
            $table->unsignedInteger('been_seedlings')->default(0);
            $table->unsignedInteger('celery')->default(0);
            $table->unsignedInteger('crowndaisy')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_vegetable');
    }
}

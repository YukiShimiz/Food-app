<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuDriedMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_dried_material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('dashi_kelp')->default(0);
            $table->unsignedInteger('tororo_kelp')->default(0);
            $table->unsignedInteger('dried_seaweed')->default(0);
            $table->unsignedInteger('dried_hijiki')->default(0);
            $table->unsignedInteger('seasoned_seaweed')->default(0);
            $table->unsignedInteger('grilled_seaweed')->default(0);
            $table->unsignedInteger('green_laver')->default(0);
            $table->unsignedInteger('niboshi')->default(0);
            $table->unsignedInteger('dried_shrimp')->default(0);
            $table->unsignedInteger('kezuribushi')->default(0);
            $table->unsignedInteger('katsuobushi')->default(0);
            $table->unsignedInteger('wheat_bran')->default(0);
            $table->unsignedInteger('dried_yuba')->default(0);
            $table->unsignedInteger('harusame')->default(0);
            $table->unsignedInteger('kuzukiri')->default(0);
            $table->unsignedInteger('koya_tohu')->default(0);
            $table->unsignedInteger('dried_vagetables')->default(0);
            $table->unsignedInteger('kiriboshi_daikon')->default(0);
            $table->unsignedInteger('kanpyo')->default(0);
            $table->unsignedInteger('wood_ear')->default(0);
            $table->unsignedInteger('sesame')->default(0);
            $table->unsignedInteger('kinako')->default(0);
            $table->unsignedInteger('dried_beans')->default(0);
            $table->unsignedInteger('hurikake')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_dried_material');
    }
}

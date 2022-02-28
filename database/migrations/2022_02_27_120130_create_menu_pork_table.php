<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuPorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_pork', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('pork_minced')->default(0);
            $table->unsignedInteger('pork_shoulder')->default(0);
            $table->unsignedInteger('pork_boston_butt')->default(0);
            $table->unsignedInteger('pork_lose')->default(0);
            $table->unsignedInteger('pork_fillet')->default(0);
            $table->unsignedInteger('pork_ribs')->default(0);
            $table->unsignedInteger('pork_thigh')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_pork');
    }
}

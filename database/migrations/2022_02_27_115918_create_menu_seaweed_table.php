<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuSeaweedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_seaweed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('namawakame')->default(0);
            $table->unsignedInteger('namamozuku')->default(0);
            $table->unsignedInteger('namamekabu')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_seaweed');
    }
}

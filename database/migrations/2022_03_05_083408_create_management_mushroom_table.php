<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementMushroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_mushroom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('enokitake_red')->default(0);
            $table->unsignedInteger('enokitake_brown')->default(0);
            $table->unsignedInteger('bunashimeji_brown')->default(0);
            $table->unsignedInteger('bunashimeji_white')->default(0);
            $table->unsignedInteger('shitake')->default(0);
            $table->unsignedInteger('king_trumpet')->default(0);
            $table->unsignedInteger('maitake')->default(0);
            $table->unsignedInteger('maitake_white')->default(0);
            $table->unsignedInteger('nameko')->default(0);
            $table->unsignedInteger('mushroom')->default(0);
            $table->unsignedInteger('oyster_mushroom')->default(0);
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
        Schema::dropIfExists('management_mushroom');
    }
}

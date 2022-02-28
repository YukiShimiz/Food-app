<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementPowdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_powders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('flour')->default(0);
            $table->unsignedInteger('bread_crumbs')->default(0);
            $table->unsignedInteger('starch')->default(0);
            $table->unsignedInteger('tempura_flour')->default(0);
            $table->unsignedInteger('fried_chicken_flour')->default(0);
            $table->unsignedInteger('non_fried_flour')->default(0);
            $table->unsignedInteger('buckwheat_flour')->default(0);
            $table->unsignedInteger('rice_flour')->default(0);
            $table->unsignedInteger('cornstarch')->default(0);
            $table->unsignedInteger('wheat_germ')->default(0);
            $table->unsignedInteger('husuma')->default(0);
            $table->unsignedInteger('okonomiyaki_flour')->default(0);
            $table->unsignedInteger('takoyaki_flour')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_powders');
    }
}

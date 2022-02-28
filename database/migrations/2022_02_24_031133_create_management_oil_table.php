<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementOilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_oil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('salad_oil')->default(0);
            $table->unsignedInteger('olive_oil')->default(0);
            $table->unsignedInteger('sesame_oil')->default(0);
            $table->unsignedInteger('egoma_oil')->default(0);
            $table->unsignedInteger('rapeseed_oil')->default(0);
            $table->unsignedInteger('corn_oil')->default(0);
            $table->unsignedInteger('coconut_oil')->default(0);
            $table->unsignedInteger('flaxseed_oil')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_oil');
    }
}

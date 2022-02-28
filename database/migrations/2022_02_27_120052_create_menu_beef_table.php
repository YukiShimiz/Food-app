<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuBeefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_beef', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('beef_minced')->default(0);
            $table->unsignedInteger('beef_shoulder')->default(0);
            $table->unsignedInteger('beef_boston_butt')->default(0);
            $table->unsignedInteger('beef_ribulose')->default(0);
            $table->unsignedInteger('beef_sirloin')->default(0);
            $table->unsignedInteger('beef_fillet')->default(0);
            $table->unsignedInteger('beef_ribs')->default(0);
            $table->unsignedInteger('beef_thigh')->default(0);
            $table->unsignedInteger('beef_rump')->default(0);
            $table->unsignedInteger('beef_shin')->default(0);
            $table->unsignedInteger('beef_neck')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_beef');
    }
}

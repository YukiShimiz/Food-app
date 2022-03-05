<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementYakumiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_yakumi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('ginger')->default(0);
            $table->unsignedInteger('japanese_ginger')->default(0);
            $table->unsignedInteger('wasabi')->default(0);
            $table->unsignedInteger('oba')->default(0);
            $table->unsignedInteger('yuzu')->default(0);
            $table->unsignedInteger('mitsuba')->default(0);
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
        Schema::dropIfExists('management_yakumi');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementKneadedMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_kneaded_material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('kamaboko')->default(0);
            $table->unsignedInteger('datemaki')->default(0);
            $table->unsignedInteger('namachikuwa')->default(0);
            $table->unsignedInteger('yakichikuwa')->default(0);
            $table->unsignedInteger('hanpen')->default(0);
            $table->unsignedInteger('tsumire')->default(0);
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
        Schema::dropIfExists('management_kneaded_material');
    }
}

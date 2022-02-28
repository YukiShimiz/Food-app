<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateKneadedMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_kneaded_material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('kamaboko')->default(0);
            $table->unsignedInteger('datemaki')->default(0);
            $table->unsignedInteger('namachikuwa')->default(0);
            $table->unsignedInteger('yakichikuwa')->default(0);
            $table->unsignedInteger('hanpen')->default(0);
            $table->unsignedInteger('tsumire')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_kneaded_material');
    }
}

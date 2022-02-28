<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateCarbohydratesBreadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_carbohydrates_bread', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('plain_bread')->default(0);
            $table->unsignedInteger('koppe_bread')->default(0);
            $table->unsignedInteger('croissant')->default(0);
            $table->unsignedInteger('bread_roll')->default(0);
            $table->unsignedInteger('bagel')->default(0);
            $table->unsignedInteger('danish')->default(0);
            $table->unsignedInteger('scone')->default(0);
            $table->unsignedInteger('baguette')->default(0);
            $table->unsignedInteger('batal')->default(0);
            $table->unsignedInteger('naan')->default(0);
            $table->unsignedInteger('grissini')->default(0);
            $table->unsignedInteger('muffin')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_carbohydrates_bread');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateCarbohydratesCerealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_carbohydrates_cereals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('rice')->default(0);
            $table->unsignedInteger('brown_rice')->default(0);
            $table->unsignedInteger('millet')->default(0);
            $table->unsignedInteger('sticky_rice')->default(0);
            $table->unsignedInteger('rice_cake')->default(0);
            $table->unsignedInteger('mochikinchaku')->default(0);
            $table->unsignedInteger('cereal')->default(0);
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
        Schema::dropIfExists('template_carbohydrates_cereals');
    }
}

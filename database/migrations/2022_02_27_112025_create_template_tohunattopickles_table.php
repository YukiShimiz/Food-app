<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateTohunattopicklesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_tohunattopickles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('tohu')->default(0);
            $table->unsignedInteger('fried_tohu')->default(0);
            $table->unsignedInteger('atsuage')->default(0);
            $table->unsignedInteger('tohuyou')->default(0);
            $table->unsignedInteger('namayuba')->default(0);
            $table->unsignedInteger('natto')->default(0);
            $table->unsignedInteger('kimchi')->default(0);
            $table->unsignedInteger('salted_plum')->default(0);
            $table->unsignedInteger('pickled_radish')->default(0);
            $table->unsignedInteger('konjac')->default(0);
            $table->unsignedInteger('shirataki')->default(0);
            $table->unsignedInteger('tsukudani')->default(0);
            $table->unsignedInteger('menma')->default(0);
            $table->unsignedInteger('zha_cai')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_tohunattopickles');
    }
}

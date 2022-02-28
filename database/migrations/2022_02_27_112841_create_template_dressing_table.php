<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateDressingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_dressing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('french_dressing')->default(0);
            $table->unsignedInteger('italian_dressing')->default(0);
            $table->unsignedInteger('caesar_dressing')->default(0);
            $table->unsignedInteger('sesame_dressing')->default(0);
            $table->unsignedInteger('green_perilla_dressing')->default(0);
            $table->unsignedInteger('soy_sauce_dressing')->default(0);
            $table->unsignedInteger('wasabi_soy_sauce_dressing')->default(0);
            $table->unsignedInteger('chinese_dressing')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_dressing');
    }
}

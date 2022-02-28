<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateCheeseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_cheese', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('mozzarella_cheese')->default(0);
            $table->unsignedInteger('cream_cheese')->default(0);
            $table->unsignedInteger('mascarpone_cheese')->default(0);
            $table->unsignedInteger('camembert_cheese')->default(0);
            $table->unsignedInteger('gorgonzola_cheese')->default(0);
            $table->unsignedInteger('gouda_cheese')->default(0);
            $table->unsignedInteger('cheddar_cheese')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_cheese');
    }
}

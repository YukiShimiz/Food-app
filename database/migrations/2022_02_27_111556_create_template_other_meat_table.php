<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateOtherMeatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_other_meat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('duck_meat')->default(0);
            $table->unsignedInteger('venison')->default(0);
            $table->unsignedInteger('turckey')->default(0);
            $table->unsignedInteger('bacon')->default(0);
            $table->unsignedInteger('ham')->default(0);
            $table->unsignedInteger('sausage')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_other_meat');
    }
}

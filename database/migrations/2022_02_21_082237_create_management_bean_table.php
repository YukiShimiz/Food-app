<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementBeanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_bean', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('edamame')->default(0);
            $table->unsignedInteger('soybean')->default(0);
            $table->unsignedInteger('greenpeace')->default(0);
            $table->unsignedInteger('broad_bean')->default(0);
            $table->unsignedInteger('peanut')->default(0);
            $table->unsignedInteger('endomame')->default(0);
            $table->unsignedInteger('green_bean')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_bean');
    }
}

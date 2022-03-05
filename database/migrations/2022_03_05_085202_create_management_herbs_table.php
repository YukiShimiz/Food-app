<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementHerbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_herbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('basil')->default(0);
            $table->unsignedInteger('arugula')->default(0);
            $table->unsignedInteger('parsley')->default(0);
            $table->unsignedInteger('rosemary')->default(0);
            $table->unsignedInteger('coriander')->default(0);
            $table->unsignedInteger('lemongrass')->default(0);
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
        Schema::dropIfExists('management_herbs');
    }
}

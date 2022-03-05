<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementMuttonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_mutton', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('mutton_lose')->default(0);
            $table->unsignedInteger('mutton_boston_butt')->default(0);
            $table->unsignedInteger('mutton_shoulder')->default(0);
            $table->unsignedInteger('mutton_thigh')->default(0);
            $table->unsignedInteger('mutton_ribs')->default(0);
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
        Schema::dropIfExists('management_mutton');
    }
}

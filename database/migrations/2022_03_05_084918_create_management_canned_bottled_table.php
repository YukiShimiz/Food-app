<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementCannedBottledTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_canned_bottled', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('canned_fish_and_shellfish')->default(0);
            $table->unsignedInteger('canned_fruit')->default(0);
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
        Schema::dropIfExists('management_canned_bottled');
    }
}

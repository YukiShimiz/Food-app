<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementSeasoningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_seasoning', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('soy_sauce')->default(0);
            $table->unsignedInteger('noodle_soup')->default(0);
            $table->unsignedInteger('dashi')->default(0);
            $table->unsignedInteger('miso')->default(0);
            $table->unsignedInteger('ketchup')->default(0);
            $table->unsignedInteger('mayonnaise')->default(0);
            $table->unsignedInteger('worcestershire_sauce')->default(0);
            $table->unsignedInteger('ponzu_sauce')->default(0);
            $table->unsignedInteger('salt')->default(0);
            $table->unsignedInteger('sugar')->default(0);
            $table->unsignedInteger('vinegar')->default(0);
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
        Schema::dropIfExists('management_seasoning');
    }
}

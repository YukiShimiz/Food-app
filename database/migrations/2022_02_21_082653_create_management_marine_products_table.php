<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementMarineProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_marine_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('horse_mackerel')->default(0);
            $table->unsignedInteger('anago')->default(0);
            $table->unsignedInteger('squid')->default(0);
            $table->unsignedInteger('ikura')->default(0);
            $table->unsignedInteger('sujiko')->default(0);
            $table->unsignedInteger('sardine')->default(0);
            $table->unsignedInteger('unagi')->default(0);
            $table->unsignedInteger('sea_urchin')->default(0);
            $table->unsignedInteger('skipjack')->default(0);
            $table->unsignedInteger('crab')->default(0);
            $table->unsignedInteger('salmon')->default(0);
            $table->unsignedInteger('mackerel')->default(0);
            $table->unsignedInteger('pacific_saury')->default(0);
            $table->unsignedInteger('shishamo')->default(0);
            $table->unsignedInteger('sea_bream')->default(0);
            $table->unsignedInteger('octopus')->default(0);
            $table->unsignedInteger('cod')->default(0);
            $table->unsignedInteger('tarako')->default(0);
            $table->unsignedInteger('mentaiko')->default(0);
            $table->unsignedInteger('chirimen')->default(0);
            $table->unsignedInteger('shirasu')->default(0);
            $table->unsignedInteger('puffer_fish')->default(0);
            $table->unsignedInteger('hokke')->default(0);
            $table->unsignedInteger('tuna')->default(0);
            $table->unsignedInteger('herring_roe')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_marine_products');
    }
}

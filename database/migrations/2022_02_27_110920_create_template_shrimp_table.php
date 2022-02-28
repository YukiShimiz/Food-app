<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateShrimpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_shrimp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('whiteleg_shrimp')->default(0);
            $table->unsignedInteger('red_shrimp')->default(0);
            $table->unsignedInteger('black_tiger_shrimp')->default(0);
            $table->unsignedInteger('kurumaebi')->default(0);
            $table->unsignedInteger('button_shrimp')->default(0);
            $table->unsignedInteger('sweet_shrimp')->default(0);
            $table->unsignedInteger('shiba_shrimp')->default(0);
            $table->unsignedInteger('sakura_shrimp')->default(0);
            $table->unsignedInteger('spiny_lobster')->default(0);
            $table->unsignedInteger('lobster')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_shrimp');
    }
}

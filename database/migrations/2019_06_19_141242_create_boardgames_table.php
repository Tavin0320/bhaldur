<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardgamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boardgames', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('slug', 100)->unique();
            $table->string('box_cover', 100)->unique()->nullable();
            $table->integer('min_players')->unsigned();
            $table->integer('max_players')->unsigned();
            $table->integer('min_duration')->default(0);
            $table->integer('max_duration')->default(0);
            $table->integer('min_age')->unsigned();
            $table->integer('max_age')->unsigned()->nullable();
            $table->integer('publisher_id')->unsigned();
            
            $table->timestamps();

            $table->foreign('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boardgames');
    }
}

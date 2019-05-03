<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagBeatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beat_tag', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('beat_id')->unsigned()->index();
            $table->integer('tag_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('tag_id')
                ->references('id')->on('tags')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('beat_id')
                ->references('id')->on('beats')
                ->onUpdate('cascade')
                ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_post');
    }
}

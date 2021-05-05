<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comic_id')->unsigned()->index();
            $table->double('chapter_no', 4, 1)->unsigned();
            $table->text('chapter_url');
            $table->string('chapter_title');
            $table->timestamps();

            $table->foreign('comic_id')
                    ->references('id')
                    ->on('comics')
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
        Schema::dropIfExists('chapters');
    }
}

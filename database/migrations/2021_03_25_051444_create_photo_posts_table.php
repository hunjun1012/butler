<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->string('photopostsname');
            $table->string('imagefile');
            $table->integer('likes');
            $table->integer('downloads');
            $table->integer('comments');
            $table->text('creatorcomment');
            $table->integer('favorites');
            $table->datetime('regdate');
            $table->timestamps();
            
            $table->foreign('userid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_posts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengePhotoPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge_photo_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('challengeid');
            $table->unsignedBigInteger('photopostsid');
            $table->integer('challengerank');
            $table->timestamps();

            // $table->foreign('challengeid')->references('id')->on('challenges');
            $table->foreign('photopostsid')->references('id')->on('photo_posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challenge_photo_posts');
    }
}

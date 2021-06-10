<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //외래키 추가하기 스키마:테이블 사용

        //comments테이블에서 외래키 추가
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('photopostsid')->references('id')->on('photo_posts');
        });
        //Likes테이블에서 외래키 추가
        Schema::table('likes', function (Blueprint $table) {
            $table->foreign('photopostsid')->references('id')->on('photo_posts');
        });
        //Favorite테이블에서 외래키 추가
        Schema::table('favorites', function (Blueprint $table) {
            $table->foreign('photopostsid')->references('id')->on('photo_posts');
        });
        //photo_post_rank테이블에서 외래키 추가
        Schema::table('photo_post_ranks', function (Blueprint $table) {
            $table->foreign('photopostsid')->references('id')->on('photo_posts');
        });
        //challenge_photo_posts테이블에서 외래키 추가
        Schema::table('challenge_photo_posts', function (Blueprint $table) {
            $table->foreign('challengeid')->references('id')->on('challenges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //외래키 롤백 기능 추가
        Schema::dropIfExists('comments');
        Schema::dropIfExists('likes');
        Schema::dropIfExists('favorites');
        Schema::dropIfExists('photo_post_ranks');
        Schema::dropIfExists('challenge_photo_posts');
    }
}

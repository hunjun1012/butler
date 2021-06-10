<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoPostRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_post_ranks', function (Blueprint $table) {
            $table->unsignedBigInteger('photopostsid');
            $table->integer('photorank');
            $table->timestamps();
            
            // $table->foreign('photopostsid')->references('id')->on('photo_posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_post_ranks');
    }
}

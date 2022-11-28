<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('channel_id');
            $table->unsignedBigInteger('channel_video_id');
            $table->string('comment')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->oncascade('delete');
            $table->foreign('channel_id')->references('id')->on('channels')->oncascade('delete');
            $table->foreign('channel_video_id')->references('id')->on('channel__videos')->oncascade('delete');

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
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userlikes', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id');
                $table->foreignId('post_id');

                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('post_id')->references('id')->on('posts');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userlikes');
    }
};

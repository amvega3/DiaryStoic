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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('question_id');
            $table->foreign('user_id')-> references('id')->on('users')->onUpdate('cascade')->nullable();  
            $table-> foreign('question_id')-> references('id')-> on('questions')->onUpdate('cascade')->nullable();
            $table-> longText("answer");
            $table-> timestamps();
            $table-> longText(("pathaudio"));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
};
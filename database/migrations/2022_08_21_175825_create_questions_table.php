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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table-> foreignId('answers');
            $table-> foreignId('users');
            $table-> longText("question_1");
            $table-> longText("question_2");
            $table-> longText("question_3");
            $table-> longText("question_4");
            $table-> longText("question_5");
            $table-> timestamps();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
};

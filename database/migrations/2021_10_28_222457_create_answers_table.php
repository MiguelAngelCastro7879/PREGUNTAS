<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->unsignedBigInteger('forms_user_id');
            $table->unsignedBigInteger('question_id');
            $table->string('respuesta');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('forms_user_id')->references('id')->on('forms_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions_user');
    }
}

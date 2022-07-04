<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBigQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('big_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hide')->default(0);
            $table->string('name');
            $table->integer('sortID');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('big_questions', function (Blueprint $table){

        // $table->dropSoftDeletes();

    });
}
}

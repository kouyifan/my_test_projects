<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->string('content',200);
            $table->integer('user_id')->index();
        });
    }

    /**
     * Reverse the migrations.xw
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}

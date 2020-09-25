<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->string('host_id')->nullable();
            $table->string('uuid')->nullable();
            $table->string('topic')->nullable();
            $table->bigInteger('meeting_id')->nullable()->length(15);
            $table->string('status')->nullable();
            $table->mediumText('start_url')->nullable();
            $table->mediumText('join_url')->nullable();
            $table->string('start_time')->nullable();
            $table->string('mytimezone')->nullable();
            $table->string('password')->nullable();
            $table->mediumText('settings')->nullable();
            $table->mediumText('allresult')->nullable();
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
        Schema::dropIfExists('meetings');
    }
}

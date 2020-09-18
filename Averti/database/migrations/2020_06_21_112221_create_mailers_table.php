<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('vendor');
            $table->string('host');
            $table->string('port');
            $table->string('username');
            $table->string('password');
            $table->string('encryption');
            $table->timestamps();
        });

        Schema::create('mails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('fullname')->nullable();
            $table->string('subject')->nullable();
            $table->longtext('body')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('cc')->nullable();
            $table->Integer('is_attachment')->nullable()->default(0);
            $table->Integer('is_status')->nullable()->default(0);
            $table->timestamps();
        });

        Schema::create('mail_attachment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('mail_id')->unsigned();
            $table->string('filename')->nullable();
            $table->string('filepath')->nullable();
            $table->string('filesize')->nullable();
            $table->string('filetype')->nullable();
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
        Schema::dropIfExists('mailers');
        Schema::dropIfExists('mails');
        Schema::dropIfExists('mail_attachment');
    }
}

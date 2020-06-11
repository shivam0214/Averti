<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_meta', function (Blueprint $table) {
            $table->Increments('id');
            $table->uuid('uuid');
            $table->integer('user_id')->unsigned();
            $table->Integer('age');
            $table->string('bloodgroup');
            $table->longText('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('zipcode')->nullable();
            $table->boolean('smokers')->default(0);
            $table->longText('disease')->nullable();
            $table->string('phone_no')->nullable(); 
            $table->string('home_no')->nullable(); 
            $table->string('mobile_num')->nullable(); 
            $table->date('date_of_birth');
            $table->longText('profile_image');
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
        Schema::table('user_meta', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');
        });
        Schema::dropIfExists('user_meta');
    }
}

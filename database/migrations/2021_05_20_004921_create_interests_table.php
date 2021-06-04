<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interests', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('description');
            $table->foreignId('user_id');
            $table->foreignId('origin_id');
            $table->foreignId('contact_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('origin_id')->references('id')->on('origins');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interests');
    }
}

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
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('acc_id');
            $table->foreign('acc_id')->references('id')->on('account')->onUpdate('cascade')->onDelete('cascade');
            $table->string('slug');
            $table->string('title');
            $table->string('image_path');
            $table->longText('contents');
            $table->timestamps();
        });
    }

    //$table->foreign('acc_id')->references('id')->on('account')->onUpdate('cascade')->onDelete('cascade');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
};

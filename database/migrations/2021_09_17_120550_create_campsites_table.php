<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campsites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('campsite_name'); // ニュースのタイトルを保存するカラム
            $table->string('area');
            $table->string('campsite_heading')->nullable();  // ニュースの本文を保存するカラム
            $table->string('campsite_textarea')->nullable(); // ニュースの本文を保存するカラム
            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
            $table->string('address')->nullable();
            $table->string('access_textarea')->nullable();
            $table->string('parking')->nullable();
            $table->string('tel')->nullable();
            $table->string('price')->nullable();
            $table->string('businesshours')->nullable();
            $table->string('holiday')->nullable();
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
        Schema::dropIfExists('campsites');
    }
}

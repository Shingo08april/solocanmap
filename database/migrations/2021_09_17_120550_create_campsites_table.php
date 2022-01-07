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
            $table->text('campsite_textarea')->nullable(); // ニュースの本文を保存するカラム// 画像のパスを保存するカラム
            $table->string('address')->nullable();
            $table->text('access_textarea')->nullable();
            $table->text('parking')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('habitat')->nullable();
            $table->string('campsite_type)')->nullable();
            // 複数行に改行できるように設定
            $table->text('rental_item')->nullable();
            $table->string('business_period')->nullable();
            $table->string('holiday')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('credit_card')->nullable();
            $table->string('camp_style')->nullable();
            $table->string('image_path1')->nullable();
            $table->string('image_path2')->nullable();
            $table->string('image_path3')->nullable();
            $table->string('image_path4')->nullable();
            $table->string('image_path5')->nullable();
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

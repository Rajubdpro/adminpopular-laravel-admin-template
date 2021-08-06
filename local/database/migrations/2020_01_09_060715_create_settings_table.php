<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('favicon')->nullable();
            $table->string('logo')->nullable();
            $table->longText('about_us')->nullable();
            $table->string('email')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('phone')->nullable();
            $table->mediumText('address')->nullable();
            $table->longText('google_map')->nullable();
            $table->string('copyright')->nullable();
            $table->string('google_analytics')->nullable();
            $table->string('live_chat')->nullable();
            // social
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('google')->nullable();
            $table->string('youtube')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('dribble')->nullable();
            $table->string('instagram')->nullable();
            // important link
            $table->string('first_title')->nullable();
            $table->string('first_link')->nullable();
            $table->string('second_title')->nullable();
            $table->string('second_link')->nullable();
            $table->string('third_tite')->nullable();
            $table->string('third_link')->nullable();
            $table->string('four_title')->nullable();
            $table->string('four_link')->nullable();
            $table->string('five_title')->nullable();
            $table->string('five_link')->nullable();
            $table->string('six_title')->nullable();
            // feature service
            $table->string('service_title1')->nullable();
            $table->string('service_link1')->nullable();
            $table->string('service_title2')->nullable();
            $table->string('service_link2')->nullable();
            $table->string('service_title3')->nullable();
            $table->string('service_link3')->nullable();
            $table->string('service_title4')->nullable();
            $table->string('service_link4')->nullable();
            $table->string('service_title5')->nullable();
            $table->string('service_link5')->nullable();




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
        Schema::dropIfExists('settings');
    }
}

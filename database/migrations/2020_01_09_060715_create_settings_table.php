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
            $table->string('app_name')->nullable();
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

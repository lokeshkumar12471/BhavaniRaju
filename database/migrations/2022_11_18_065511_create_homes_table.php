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
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('wallpaper');
            $table->string('cards_logo');
            $table->string('cards_title');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('facebook')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('email_id')->nullable();
            $table->string('googlemap');

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
        Schema::dropIfExists('homes');
    }
};
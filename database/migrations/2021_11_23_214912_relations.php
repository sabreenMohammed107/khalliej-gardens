<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  This is Realations for the services Table ..
        Schema::table('services', function (Blueprint $table) {

            $table->foreign('category_id')->references('id')->on('categories');
        });
         //  This is Realations for the galleries Table ..
         Schema::table('galleries', function (Blueprint $table) {

            $table->foreign('gallery_category_id')->references('id')->on('gallery_categories');
        });
         //  This is Realations for the messages Table ..
         Schema::table('messages', function (Blueprint $table) {

            $table->foreign('message_type_id')->references('id')->on('message_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

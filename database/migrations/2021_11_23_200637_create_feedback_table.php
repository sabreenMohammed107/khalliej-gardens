<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->dateTime('feedback_date',6)->nullable();
            $table->string('en_company')->nullable();
            $table->string('ar_company')->nullable();
            $table->text('en_name')->nullable();
            $table->text('ar_name')->nullable();
            $table->text('en_feedback')->nullable();
            $table->text('ar_feedback')->nullable();
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
        Schema::dropIfExists('feedback');
    }
}

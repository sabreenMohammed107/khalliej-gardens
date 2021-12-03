<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('en_name')->nullable();
            $table->string('ar_name')->nullable();
            $table->string('en_about_title')->nullable();
            $table->string('ar_about_title')->nullable();
            $table->text('en_about')->nullable();
            $table->text('ar_about')->nullable();
            $table->text('en_overview')->nullable();
            $table->text('ar_overview')->nullable();
            $table->text('en_vision')->nullable();
            $table->text('ar_vision')->nullable();
            $table->text('en_mission')->nullable();
            $table->text('ar_mission')->nullable();
            $table->text('en_value')->nullable();
            $table->text('ar_value')->nullable();
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
        Schema::dropIfExists('companies');
    }
}

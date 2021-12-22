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
            $table->longText('en_name')->nullable();
            $table->longText('ar_name')->nullable();
            $table->longText('en_about_title')->nullable();
            $table->longText('ar_about_title')->nullable();
            $table->longText('en_about')->nullable();
            $table->longText('ar_about')->nullable();
            $table->longText('en_overview')->nullable();
            $table->longText('ar_overview')->nullable();
            $table->longText('en_vision')->nullable();
            $table->longText('ar_vision')->nullable();
            $table->longText('en_mission')->nullable();
            $table->longText('ar_mission')->nullable();
            $table->longText('en_value')->nullable();
            $table->longText('ar_value')->nullable();
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

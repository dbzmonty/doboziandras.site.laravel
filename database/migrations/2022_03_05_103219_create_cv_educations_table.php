<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cv_educations', function (Blueprint $table) {
            $table->id();
            $table->string('qualification', 240)->unique();
            $table->string('institude', 240);
            $table->string('location', 240);
            $table->string('date_period', 240);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cv_educations');
    }
};

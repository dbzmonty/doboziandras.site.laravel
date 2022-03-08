<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cv_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course', 240)->unique();
            $table->string('platform', 240);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cv_courses');
    }
};

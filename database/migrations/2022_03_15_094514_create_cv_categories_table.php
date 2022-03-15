<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cv_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title', 240)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cv_categories');
    }
};

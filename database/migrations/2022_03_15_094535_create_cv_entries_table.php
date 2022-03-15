<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cv_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('title', 240);
            $table->string('company', 240);
            $table->string('location', 240)->nullable();
            $table->integer('year_from')->nullable();
            $table->integer('year_to')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cv_entries');
    }
};

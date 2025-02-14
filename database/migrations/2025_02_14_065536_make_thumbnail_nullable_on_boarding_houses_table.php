<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThumbnailAndDescriptionToBoardingHouses extends Migration
{
    public function up()
    {
        Schema::table('boarding_houses', function (Blueprint $table) {
            $table->string('thumbnail')->nullable();  // Menambahkan kolom thumbnail
        });
    }

    public function down()
    {
        Schema::table('boarding_houses', function (Blueprint $table) {
            $table->dropColumn(['thumbnail']);  // Menghapus kolom jika migration di-rollback
        });
    }
}


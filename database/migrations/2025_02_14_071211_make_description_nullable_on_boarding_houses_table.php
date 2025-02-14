<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThumbnailAndDescriptionToBoardingHouses extends Migration
{
    public function up()
    {
        Schema::table('boarding_houses', function (Blueprint $table) {
            $table->text('description')->nullable();  // Menambahkan kolom description
        });
    }

    public function down()
    {
        Schema::table('boarding_houses', function (Blueprint $table) {
            $table->dropColumn(['description']);  // Menghapus kolom jika migration di-rollback
        });
    }
}


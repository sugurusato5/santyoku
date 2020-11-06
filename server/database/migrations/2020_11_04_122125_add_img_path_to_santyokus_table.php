<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgPathToSantyokusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('santyokus', function (Blueprint $table) {
            $table->string('face_img')->after('image_url');
            $table->string('category');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('santyokus', function (Blueprint $table) {
            $table->dropColumn(['img_path']);
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandGeometriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_geometries', function (Blueprint $table) {
            $table->id();
            $table->integer('region_code');
            $table->integer('district_code');
            $table->integer('arccgis_id');
            $table->integer('cadastral_number');
            $table->geometry('geometry');
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
        Schema::dropIfExists('land_geometries');
    }
}

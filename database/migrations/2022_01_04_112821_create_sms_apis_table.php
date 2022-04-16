<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::connection('ijaradb')->create('sms_apis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('land_offer_id');
            $table->string('recipient');
            $table->bigInteger('message_id')->unique();
            $table->integer('originator');
            $table->string('text');
            $table->json('response')->nullable();
            $table->integer('http_status')->nullable();
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
        Schema::connection('ijaradb')->dropIfExists('sms_apis');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersonType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    protected $connection = 'pgsql';
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->char('user_type')->default('J');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('user_type');
        });
    }
}

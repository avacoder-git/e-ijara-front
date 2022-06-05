<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPinflColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('pinfl')->nullable();
            $table->string('username')->nullable();
            $table->string('fullname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('midname')->nullable();
            $table->string('inn')->nullable();
            $table->string('passport')->nullable();
            $table->string('passport_expire_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('auth_type')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('last_login')->nullable();
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
            $table->dropColumn('pinfl');
            $table->dropColumn('username');
            $table->dropColumn('firstname');
            $table->dropColumn('fullname');
            $table->dropColumn('lastname');
            $table->dropColumn('midname');
            $table->dropColumn('inn');
            $table->dropColumn('passport');
            $table->dropColumn('passport_expire_date');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('auth_type');
            $table->dropColumn('deleted_at');
            $table->dropColumn('status');
            $table->dropColumn('last_login');

        });
    }
}

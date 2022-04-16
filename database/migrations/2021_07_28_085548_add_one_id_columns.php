<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOneIdColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->tinyInteger('status')->default(1)->after('remember_token');
                $table->softDeletes()->after('updated_at');
                $table->string('username', 255)->unique()->nullable();
                $table->string('fullname', 255)->nullable();
                $table->string('firstname', 70)->nullable();
                $table->string('lastname', 70)->nullable();
                $table->string('midname', 70)->nullable();
                $table->string('pinfl', 15)->nullable();
                $table->string('inn', 10)->nullable();
                $table->string('passport', 10)->nullable();
                $table->date('passport_expire_date', 10)->nullable();
                $table->string('phone', 15)->nullable();
                $table->string('address', 400)->nullable();
                $table->datetime('last_login')->nullable();
                $table->string('extra_info', 400)->nullable();
                $table->string('auth_type', 50)->nullable()->default('internal');
            });
        }

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('username');
            $table->dropColumn('fullname');
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('midname');
            $table->dropColumn('pinfl');
            $table->dropColumn('inn');
            $table->dropColumn('passport');
            $table->dropColumn('passport_expire_date');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('last_login');
            $table->dropColumn('extra_info');
            $table->dropColumn('auth_type');
            $table->dropColumn('deleted_at');
        });
    }
}

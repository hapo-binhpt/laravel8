<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->date('birthday')->nullable();
            $table->string('avatar', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->integer('phone')->nullable();
            $table->string('intro', 255)->nullable();
            $table->softDelete();
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
            $table->dropColumn('birthday');
            $table->dropColumn('phone');
            $table->dropColumn('role');
            $table->dropSoftDelete();
        });
    }
}

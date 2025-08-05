<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSponsorAndPositionToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('sponsor_id')->nullable();
        $table->string('position')->nullable();
        $table->string('user_id')->unique();
        $table->string('plain_password')->nullable();
        $table->string('phone')->nullable();   
        $table->string('profile_image')->nullable();
        $table->boolean('status')->default(0);
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
            //
        });
    }
}

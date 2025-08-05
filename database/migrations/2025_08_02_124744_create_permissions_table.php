<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::create('permissions', function (Blueprint $table) {
                $table->id();
                $table->foreignId('role_id')->constrained()->onDelete('cascade');
                $table->foreignId('module_id')->constrained()->onDelete('cascade');
                $table->boolean('read')->default(0);
                $table->boolean('write')->default(0);
                $table->boolean('create')->default(0);
                $table->boolean('delete')->default(0);
                $table->boolean('import')->default(0);
                $table->boolean('export')->default(0);
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
        Schema::dropIfExists('permissions');
    }
}

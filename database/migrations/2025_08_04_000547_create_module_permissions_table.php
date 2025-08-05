<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('module_permissions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('role_id')->constrained()->onDelete('cascade');
        $table->foreignId('module_id')->constrained()->onDelete('cascade');
        $table->boolean('allow_all')->default(false);
        $table->boolean('read')->default(false);
        $table->boolean('write')->default(false);
        $table->boolean('create')->default(false);
        $table->boolean('delete')->default(false);
        $table->boolean('import')->default(false);
        $table->boolean('export')->default(false);
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
        Schema::dropIfExists('module_permissions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaturnPermissionGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saturn_permission_group', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permission_id')->constrained('saturn_permissions');
            $table->foreignId('group_id')->constrained('saturn_groups');
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
        Schema::dropIfExists('saturn_permission_group');
    }
}

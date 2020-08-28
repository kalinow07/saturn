<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaturnGroupMarkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saturn_group_marker', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained('saturn_groups');
            $table->foreignId('marker_id')->constrained('saturn_markers');
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
        Schema::dropIfExists('saturn_group_marker');
    }
}

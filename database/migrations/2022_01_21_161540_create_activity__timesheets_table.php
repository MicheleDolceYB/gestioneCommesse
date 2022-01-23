<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityTimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_timesheets', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('activity_id');
            $table->unsignedInteger('timesheet_id');
            $table->foreign('activity_id')
            ->references('id')
            ->on('activities')
            ->onDelete('cascade');
            $table->foreign('timesheet_id')
            ->references('id')
            ->on('timesheets')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_timesheets');
    }
}

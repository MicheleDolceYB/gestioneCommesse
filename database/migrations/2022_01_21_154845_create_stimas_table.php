<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stimas', function (Blueprint $table) {
            
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('dependent_id');
            $table->unsignedInteger('activity_id');
            $table->bigInteger('stima');
            $table->foreign('dependent_id')
            ->references('id')
            ->on('dependents')
            ->onDelete('cascade');
            $table->foreign('activity_id')
            ->references('id')
            ->on('activities')
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
        Schema::dropIfExists('stimas');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtasks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('task_id')->index();
            $table->string('name');
            $table->string('description');
            $table->enum('status', ['Created', 'Work in Progress','Waiting on Client', 'On Hold', 'Completed']);
            $table->unsignedSmallInteger('hours_estimate');
            $table->string('user_id')->index();
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
        Schema::dropIfExists('subtasks');
    }
}

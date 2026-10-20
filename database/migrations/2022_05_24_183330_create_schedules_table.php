<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('theme');
            $table->string('program');
            $table->longText('description')->nullable();
            $table->enum('day',['I', 'II', 'III', 'IV']);
            $table->longText('speaker')->nullable();
            $table->integer('order');
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('room')->nullable();
            $table->longText('moderator')->nullable();
            $table->string('logo')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('schedules');
    }
}

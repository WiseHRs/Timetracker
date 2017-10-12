<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wise_wt_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();

            $table->time('monday_arrival')->nullable();
            $table->time('monday_leaving')->nullable();
            $table->time('monday_delay_margin')->nullable();

            $table->time('tuesday_arrival')->nullable();
            $table->time('tuesday_leaving')->nullable();
            $table->time('tuesday_delay_margin')->nullable();

            $table->time('wednesday_arrival')->nullable();
            $table->time('wednesday_leaving')->nullable();
            $table->time('wednesday_delay_margin')->nullable();

            $table->time('thursday_arrival')->nullable();
            $table->time('thursday_leaving')->nullable();
            $table->time('thursday_delay_margin')->nullable();

            $table->time('friday_arrival')->nullable();
            $table->time('friday_leaving')->nullable();
            $table->time('friday_delay_margin')->nullable();

            $table->time('saturday_arrival')->nullable();
            $table->time('saturday_leaving')->nullable();
            $table->time('saturday_delay_margin')->nullable();

            $table->time('sunday_arrival')->nullable();
            $table->time('sunday_leaving')->nullable();
            $table->time('sunday_delay_margin')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('wise_wt_schedules');
    }
}

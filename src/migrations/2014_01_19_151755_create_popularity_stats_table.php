<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopularityStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('popularity_stats', function(Blueprint $table)
		{
			$table->increments('id');
            $table->morphs('trackable');
            $table->integer('one_day_stats')->default(0);
            $table->integer('seven_days_stats')->default(0);
            $table->integer('thirty_days_stats')->default(0);
            $table->integer('all_time_stats')->default(0);
            $table->string('raw_stats')->default('');
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
		Schema::drop('popularity_stats');
	}
}
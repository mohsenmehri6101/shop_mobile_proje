<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateVisitLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitlogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip')->default('0.0.0.0');
            $table->string('browser')->nullable();
            $table->string('os')->nullable();
            $table->string('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('country_code')->nullable();
            $table->string('country_name')->nullable();
            $table->string('region_name')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
ALTER TABLE `visitlogs` ADD `longitude` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `ip`;
ALTER TABLE `visitlogs` ADD `latitude` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `ip`;
ALTER TABLE `visitlogs` ADD `time_zone` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `ip`;
ALTER TABLE `visitlogs` ADD `zip_code` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `ip`;
ALTER TABLE `visitlogs` ADD `city` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `ip`;
ALTER TABLE `visitlogs` ADD `region_name` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `ip`;
ALTER TABLE `visitlogs` ADD `country_code` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `ip`;
ALTER TABLE `visitlogs` ADD `user_name` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `ip`;
ALTER TABLE `visitlogs` ADD `user_id` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `ip`;
ALTER TABLE `visitlogs` ADD `os` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `ip`;
     * @return void
     */
    public function down()
    {
        Schema::drop('visitlogs');
    }
}

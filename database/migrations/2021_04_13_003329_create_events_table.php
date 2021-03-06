<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('maxVolunteers')->default(0);
            $table->string('name');
            $table->mediumText('description');
            $table->datetime('eventBegin');
            $table->datetime('eventEnd');
            $table->string('titleImageId');
            $table->string('mapsUrl');
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
        Schema::dropIfExists('events');
    }
}

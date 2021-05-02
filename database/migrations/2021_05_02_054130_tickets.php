<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('userId');
            
            // if this is any positive integer, we'll attempt to get a user at that id
            // Otherwise, any admin can see the ticket
            $table->integer('recipientId')->default(-1);
            
            $table->text('message');
            $table->tinyInteger('type');
            
            // Ticket will remain archived but unavailable to general searches if closed
            $table->boolean('closed')->default(0);
            
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
        Schema::dropIfExists('tickets');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutgoingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoing_items', function (Blueprint $table) {
           $table->id();
            $table->foreignId('outgoing_id');
            $table->string('item_name');
            $table->integer('quantity')->nullable();
            $table->integer('cubic_metre')->nullable();
            $table->timestamps();

            $table->foreign('outgoing_id')
            ->references('id')
            ->on('outgoings')
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
        Schema::dropIfExists('outgoing_items');
    }
}

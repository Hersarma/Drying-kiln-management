<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_items', function (Blueprint $table) {
           $table->id();
            $table->foreignId('incoming_id');
            $table->string('item_name');
            $table->integer('quantity')->nullable();
            $table->decimal('cubic_metre')->nullable();
            $table->timestamps();

            $table->foreign('incoming_id')
            ->references('id')
            ->on('incomings')
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
        Schema::dropIfExists('incoming_items');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimberOutgoingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timber_outgoing_items', function (Blueprint $table) {
           $table->id();
            $table->foreignId('timber_outgoing_id');
            $table->string('item_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('cubic_metre', 8, 2)->nullable();
            $table->timestamps();

            $table->foreign('timber_outgoing_id')
            ->references('id')
            ->on('timber_outgoings')
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
        Schema::dropIfExists('timber_outgoing_items');
    }
}

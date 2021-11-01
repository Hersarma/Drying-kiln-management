<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimberIncomingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timber_incoming_items', function (Blueprint $table) {
           $table->id();
            $table->foreignId('timber_incoming_id');
            $table->string('type_of_wood')->nullable();
            $table->integer('number_of_pallets')->nullable();
            $table->float('m3', 8, 2)->nullable();
            $table->timestamps();

            $table->foreign('timber_incoming_id')
            ->references('id')
            ->on('timber_incomings')
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
        Schema::dropIfExists('timber_incoming_items');
    }
}

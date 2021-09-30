<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimberOutgoingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timber_outgoings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->string('type_of_wood')->nullable();
            $table->integer('number_of_pallets')->nullable();
            $table->float('m3', 8, 2)->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();

            $table->foreign('client_id')
            ->references('id')
            ->on('clients')
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
        Schema::dropIfExists('timber_outgoings');
    }
}

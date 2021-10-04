<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrykilnProbesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drykiln_probes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drykiln_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('drykiln_id')
            ->references('id')
            ->on('drykilns')
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
        Schema::dropIfExists('drykiln_probes');
    }
}

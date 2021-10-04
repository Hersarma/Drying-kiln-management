<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrykilnProbesSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drykiln_probes_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('probe_id');
            $table->boolean('status')->default(0);
            $table->text('belongs_to_client');
            $table->string('type_of_wood');
            $table->timestamps();

            $table->foreign('probe_id')
            ->references('id')
            ->on('drykiln_probes')
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
        Schema::dropIfExists('drykiln_probes_settings');
    }
}

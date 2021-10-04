<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrykilnStartupSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drykiln_startup_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drykiln_id');
            $table->text('clients');
            $table->string('type_of_wood');
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
        Schema::dropIfExists('drykiln_startup_settings');
    }
}

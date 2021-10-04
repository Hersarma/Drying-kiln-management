<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrykilnConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drykiln_configs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drykiln_id');
            $table->text('clients');
            $table->string('type_of_wood');
            $table->boolean('probe_1')->default(0);
            $table->boolean('probe_2')->default(0);
            $table->boolean('probe_3')->default(0);
            $table->boolean('probe_4')->default(0);
            $table->boolean('probe_5')->default(0);
            $table->boolean('probe_6')->default(0);
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
        Schema::dropIfExists('drykiln_configs');
    }
}

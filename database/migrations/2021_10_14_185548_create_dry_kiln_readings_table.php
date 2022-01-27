<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDryKilnReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dry_kiln_readings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drying_proces_id');
            $table->float('temp_needed', 8, 2)->nullable();
            $table->float('temp_current', 8, 2)->nullable();
            $table->float('moisture_needed', 8, 2)->nullable();
            $table->float('moisture_current', 8, 2)->nullable();
            $table->float('moisture_probe_1', 8, 2)->nullable();
            $table->float('moisture_probe_2', 8, 2)->nullable();
            $table->float('moisture_probe_3', 8, 2)->nullable();
            $table->float('moisture_probe_4', 8, 2)->nullable();
            $table->float('moisture_probe_5', 8, 2)->nullable();
            $table->float('moisture_probe_6', 8, 2)->nullable();
            $table->float('moisture_probes_average', 8, 2)->nullable();
            $table->timestamps();

            $table->foreign('drying_proces_id')
            ->references('id')
            ->on('drying_proces')
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
        Schema::dropIfExists('dry_kiln_readings');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrykilnReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drykiln_readings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dry_kiln_id');
            $table->float('temp_needed', 8, 2);
            $table->float('temp_current', 8, 2);
            $table->float('moisture_needed', 8, 2);
            $table->float('moisture_current', 8, 2);
            $table->float('moisture_probe_1', 8, 2);
            $table->float('moisture_probe_2', 8, 2);
            $table->float('moisture_probe_3', 8, 2);
            $table->float('moisture_probe_4', 8, 2);
            $table->float('moisture_probe_5', 8, 2);
            $table->float('moisture_probe_6', 8, 2);
            $table->float('moisture_probes_average', 8, 2);
            $table->timestamps();

            $table->foreign('dry_kiln_id')
            ->references('id')
            ->on('dry_kilns')
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
        Schema::dropIfExists('drykiln_readings');
    }
}
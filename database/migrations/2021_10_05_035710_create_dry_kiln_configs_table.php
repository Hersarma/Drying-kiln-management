<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDryKilnConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dry_kiln_configs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dry_kiln_id');
            $table->boolean('dry_kiln_status')->default(0);
            $table->text('client');
            $table->text('type_of_wood');
            $table->text('notes')->nullable();
            $table->boolean('probe_1_status')->default(0);
            $table->boolean('probe_2_status')->default(0);
            $table->boolean('probe_3_status')->default(0);
            $table->boolean('probe_4_status')->default(0);
            $table->boolean('probe_5_status')->default(0);
            $table->boolean('probe_6_status')->default(0);
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
        Schema::dropIfExists('dry_kiln_configs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDryingProcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drying_proces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dry_kiln_id');
            $table->boolean('active')->default(0);
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
        Schema::dropIfExists('drying_proces');
    }
}

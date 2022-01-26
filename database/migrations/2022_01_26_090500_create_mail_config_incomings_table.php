<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailConfigIncomingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_config_incomings', function (Blueprint $table) {
            $table->id();
            $table->string('host');
            $table->string('port');
            $table->string('encryption');
            $table->boolean('validate_cert')->default(1);
            $table->string('username');
            $table->string('password');
            $table->string('protocol');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_config_incomings');
    }
}

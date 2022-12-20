<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('landDigramNo')->nullable();
            $table->string('landDescription')->nullable();
            $table->string('landDirections')->nullable();
            $table->integer('landArea')->nullable();
            $table->bigInteger('landNo')->nullable();
            $table->bigInteger('price')->nullable();
            $table->foreignId('agency_id', 'agency_fk_7737941')->references('id')->on('agencies');
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
        Schema::dropIfExists('lands');
    }
};

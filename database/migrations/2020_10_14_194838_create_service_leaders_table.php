<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_leaders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('cedex_id')->unsigned();
            $table->foreign('cedex_id')->references('id')->on('cedex');
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
        Schema::dropIfExists('service_leaders');
    }
}

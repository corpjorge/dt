<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationalLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operational_leaders', function (Blueprint $table) {
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
        Schema::dropIfExists('operational_leaders');
    }
}

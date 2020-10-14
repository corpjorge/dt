<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('surveyed');
            $table->longText('commentary')->nullable();
            $table->foreignId('period_id')->constrained();
            $table->foreignId('system_id')->constrained();
            $table->foreignId('criterion_id')->unsigned();
            $table->foreign('criterion_id')->references('id')->on('criteria');
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
        Schema::dropIfExists('results');
    }
}

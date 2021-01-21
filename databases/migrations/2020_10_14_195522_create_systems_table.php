<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('provider');

            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('functional_unit_id')->nullable()->constrained();
            $table->foreignId('operational_leader_id')->nullable()->constrained();
            $table->foreignId('service_leader_id')->nullable()->constrained();
            $table->foreignId('deployment_type_id')->nullable()->constrained();

            $table->foreignId('building_type_id')->nullable()->unsigned();
            $table->foreign('building_type_id')->references('id')->on('building_type');
            $table->foreignId('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('systems');
    }
}

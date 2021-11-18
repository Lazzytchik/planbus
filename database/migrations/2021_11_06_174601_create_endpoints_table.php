<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endpoints', function (Blueprint $table) {
            $table->primary(['route_id', 'direction', 'a_time']);
            $table->integer('route_id')->unsigned();
            $table->integer('station_from_id')->unsigned();
            $table->integer('station_to_id')->unsigned();
            $table->string('direction');
            $table->time('a_time');
            $table->text('comment');
            $table->timestamps();

            $table->foreign('route_id')->references('id')->on('routes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('station_to_id')->references('stop_id')->on('stations')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('station_from_id')->references('stop_id')->on('stations')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endpoints');
    }
}

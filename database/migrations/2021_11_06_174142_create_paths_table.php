<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paths', function (Blueprint $table) {
            $table->primary(['route_id', 'stop_id', 'direction', 'a_time']);
            $table->integer('route_id')->unsigned();
            $table->integer('stop_id')->unsigned();
            $table->string('direction');
            $table->time('a_time');
            $table->text('comment');
            $table->timestamps();

            $table->foreign('route_id')->references('id')->on('routes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('stop_id')->references('id')->on('stops')
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
        Schema::dropIfExists('paths');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoluDiseasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solu_diseas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->unsigned();
            $table->integer('steps_id')->unsigned();
            $table->integer('disease_id')->unsigned();
            $table->integer('solution_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('solu_diseas', function (Blueprint $table){
            $table->foreign('steps_id')->references('id')->on('steps')->onDelete('cascade');
            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade');
            $table->foreign('solution_id')->references('id')->on('solutions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solu_diseas', function (Blueprint $table){
            $table->dropForeign('solu_diseas_disease_id_foreign');
            $table->dropForeign('solu_diseas_solution_id_foreign');
        });
        Schema::dropIfExists('solu_diseas');
    }
}

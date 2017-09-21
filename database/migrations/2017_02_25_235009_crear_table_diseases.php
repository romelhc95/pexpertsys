<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CrearTableDiseases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("name_c")->nullable();
            $table->integer('type_id')->unsigned();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('diseases', function (Blueprint $table){
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diseases', function (Blueprint $table){
            $table->dropForeign('diseases_type_id_foreign');
        });

        Schema::drop('diseases');
    }
}

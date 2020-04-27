<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('title');
            $table->string('description');
            $table->string('link');
            $table->integer('year');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('jobtype_id')->unsigned();
            $table->foreign('jobtype_id')->references('id')->on('jobtypes')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')
                ->onUpdate('cascade')->onDelete('cascade');
                
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
        Schema::dropIfExists('elements');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('post');
            $table->string('qualification');
            $table->integer('vacancy')->default(1);
            $table->integer('vacant')->nullable();
            $table->text('description');
            $table->string('salary')->nullable();
            $table->string('code');
            $table->integer('organisation_id');
            $table->date('published_at');
            $table->date('deleted_at');
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
        Schema::dropIfExists('jobs');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->date('birthdate');
            $table->string('session');
            $table->string('type');
            $table->date('admission_date');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('city');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('previous_school');
            $table->integer('class_id');
            $table->integer('document_id');
            $table->string('code');
            $table->enum('status',['open','processing','completed']);
            $table->string('note')->nullable();
            $table->integer('organisation_id');
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
        Schema::dropIfExists('admissions');
    }
}

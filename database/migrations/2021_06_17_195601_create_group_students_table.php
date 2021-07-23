<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_students', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_leader');

            $table->unsignedBigInteger('id_group')->nullable();
            $table->foreign('id_group')->references('id')->on('groups');
      
            $table->unsignedBigInteger('id_student')->nullable();
            $table->foreign('id_student')->references('id')->on('students');
           
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
        Schema::dropIfExists('group_students');
    }
}

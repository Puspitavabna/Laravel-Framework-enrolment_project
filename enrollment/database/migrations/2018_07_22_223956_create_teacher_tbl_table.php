<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_tbl', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('teacher_name');
              
                  $table->string('teacher_email', 100);
                   $table->string('teacher_phone');
                  
                   $table->string('teacher_password');
                   $table->string('teacher_department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_tbl');
    }
}

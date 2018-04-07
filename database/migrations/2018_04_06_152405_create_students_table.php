<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('姓名');
            $table->string('gender')->comment('性别');
            $table->date('birthday')->comment('出生日期');
            $table->string('username')->comment('学号');
            $table->string('nation')->comment('民族');
            $table->string('politics')->comment('政治面貌');
            $table->string('origin')->comment('籍贯');
            $table->string('card_id')->comment('身份证号');
            $table->string('dormitory')->comment('宿舍');
            $table->string('phone');
            $table->string('qq');
            $table->string('we_chat');
            $table->string('email');
            $table->text('address');
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
        Schema::dropIfExists('students');
    }
}

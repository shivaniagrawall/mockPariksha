<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_test', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('test_id', 100)->nullable();
            $table->string('test_status', 100)->nullable();
            $table->string('test_time_remain', 100)->nullable();
            $table->string('section_time', 100)->nullable();
            $table->string('section__time_remain', 100)->nullable();
            $table->string('answer', 100)->nullable();
            $table->string('correct_answer', 100)->nullable();
            $table->string('worng_answer', 100)->nullable();
            $table->string('unattempted_attempt_markreviews', 100)->nullable();
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            $table->tinyInteger('is_deleted')->default(0)->comment("0=>Not deleted, 1=>Deleted");
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
        Schema::dropIfExists('user_test');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->increments('test_id');
            $table->string('pckg_id', 100)->nullable();
            $table->string('test_name', 100)->nullable();
            $table->text('test_questions')->nullable();
            $table->string('total_time', 100)->nullable();
            $table->string('total_questions', 100)->nullable();
            $table->string('maximum_marks', 100)->nullable();
            $table->string('negative_marks', 100)->nullable();
            $table->string('is_switchable', 100)->nullable();
            $table->string('section_name', 100)->nullable();
            $table->string('detailed_solution_file_path', 100)->nullable();
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
        Schema::dropIfExists('test');
    }
}

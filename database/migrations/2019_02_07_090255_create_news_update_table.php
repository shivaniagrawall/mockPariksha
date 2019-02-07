<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsUpdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_update', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('news_heading', 100)->nullable();
            $table->string('news_description', 500)->nullable();
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
        Schema::dropIfExists('news_update');
    }
}

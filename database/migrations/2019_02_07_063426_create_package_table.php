<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->increments('pckg_id');
            $table->string('pckg_name', 100)->nullable();
            $table->string('pckg_type', 100)->nullable();
            $table->string('pckg_price', 100)->nullable();
            $table->string('pckg_validity', 100)->nullable();
            $table->text('pckg_description')->nullable();
            $table->string('pckg_test', 11)->nullable();
            $table->string('pckg_exam', 11)->nullable();
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
        Schema::dropIfExists('package');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('email')->unique();
            $table->string('password', 100);
            $table->string('contact', 100)->nullable();
            $table->string('image_name', 500)->nullable();
            $table->char('role', 100)->nullable()->nullable();
            $table->dateTime('registration_date')->nullable();
            $table->string('singup_type', 25)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('verify_email')->default(0)->comment("0=>Not verified, 1=>verified");
            $table->tinyInteger('is_deleted')->default(0)->comment("0=>Not deleted, 1=>Deleted");
            $table->string('created_by', 50)->nullable();
            $table->string('updated_by', 50)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

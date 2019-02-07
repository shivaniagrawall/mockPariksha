<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('payment_id', 11);
            $table->string('package_id', 50);
            $table->string('txn_id', 50);
            $table->string('user_id', 50);
            $table->string('payment_status', 50);
            $table->date('payment_date');
            $table->date('expired_date');
            $table->float('amount', 10, 2);
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
        Schema::dropIfExists('payments');
    }
}

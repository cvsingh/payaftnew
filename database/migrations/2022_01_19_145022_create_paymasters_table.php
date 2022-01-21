<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymasters', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->integer('basic_pay');
            $table->string('da_flag');
            $table->integer('hospitaliy_allowance');
            $table->integer('hra');
            $table->integer('tpt');
            $table->integer('orderly_allowance');
            $table->integer('employer_contribution_epf');
            $table->string('cashier_allowance_flag')->nullable();
            $table->string('medical_allowance_flag')->nullable();
            $table->integer('arrears');
            $table->integer('pension');
            $table->integer('da_pension');
            $table->integer('debit_eol');
            $table->integer('gpf');
            $table->integer('cghs');
            $table->integer('cgeis');
            $table->integer('employee_contribution_epf');
            $table->integer('insurance');
            $table->integer('incometax');
            $table->integer('cess');
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
        Schema::dropIfExists('paymasters');
    }
}

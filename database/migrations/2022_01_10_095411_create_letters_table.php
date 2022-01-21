<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->integer('file_id');
            $table->text('file_subject');
            $table->string('type_document');
            $table->string('letter_no');
            $table->string('letter_subject');
            $table->string('tsk_id');
            $table->string('tsk_date');
            $table->integer('so_id');
            $table->string('so_date');
            $table->integer('ar_id');
            $table->string('ar');
            $table->integer('dr_id');
            $table->string('dr');
            $table->integer('jr_id');
            $table->string('jr');
            $table->integer('pr_id');
            $table->string('pr');
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
        Schema::dropIfExists('letters');
    }
}

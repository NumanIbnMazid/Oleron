<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('service')->default(0)->comment('0-Custom || 1-Legal Opinion || 2-Legal Documentation || 3-Legal Research || 4-Advocate');
            $table->string('attachment')->nullable();
            $table->longText('message')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0-Undone || 1-Done');
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
        Schema::dropIfExists('emails');
    }
}

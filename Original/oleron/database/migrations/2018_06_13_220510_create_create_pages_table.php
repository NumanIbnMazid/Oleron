<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page_title');
            $table->mediumText('short_description')->nullable();
            $table->longText('page_content');
            $table->integer('publication_status')->default(1)->comment('1-Published || 0-Unpublished');
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
        Schema::dropIfExists('create_pages');
    }
}

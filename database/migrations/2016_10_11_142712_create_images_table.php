<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
<<<<<<< HEAD
            $table->string('title');
            $table->text('description');
=======
            $table->string('title')->nullable();
            $table->text('description')->nullable();
>>>>>>> d6af46d15fad3701c605391030c2fe29fac23c1c
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
        Schema::drop('images');
    }
}

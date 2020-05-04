<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title')->nullable();

            $table->text('description_part1')->nullable();
            $table->string('image1')->nullable();
            $table->text('image1_caption')->nullable();
            $table->string('image1_place')->nullable();

            $table->text('description_part2')->nullable();
            $table->string('image2')->nullable();
            $table->text('image2_caption')->nullable();
            $table->string('image2_place')->nullable();

            $table->text('description_part3')->nullable();
            $table->string('image3')->nullable();
            $table->text('image3_caption')->nullable();
            $table->string('image3_place')->nullable();

            $table->string('tag')->nullable();
            $table->timestamps();

              $table->index('user_id'); // for better searchability
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

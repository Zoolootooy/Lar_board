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
            $table->string('title',255);
            $table->text('description');
            $table->string('phone', 50);
            $table->string('email', 70);

            $table->foreignId('country_id');
            $table->foreign('country_id')->references('id')->on('countries');

            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->decimal('latitude',10,8)->nullable();
            $table->decimal('longitude',11,8)->nullable();

            $table->string('photo')->nullable();

            $table->timestamp('end_date');
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
        Schema::dropIfExists('posts');
    }
}

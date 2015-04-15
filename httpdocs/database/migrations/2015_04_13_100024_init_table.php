<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('username', 255)->unique();
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_resets', function(Blueprint $table)
        {
            $table->string('username')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });

        Schema::create('boxs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description');
            $table->string('image', 255);
            $table->integer('status');
            $table->integer('type');
        });

        Schema::create('equiments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('image', 255);
        });

        Schema::create('email_patterns', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type', 255);
            $table->string('email_to', 255);
            $table->string('email_from', 255);
            $table->string('subject' ,255);
            $table->text('content');
        });

        Schema::create('testimonials', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('comment');
            $table->string('author', 255);
            $table->string('company', 255);
            $table->string('position' ,255);
            $table->integer('status');
        });

        Schema::create('clients', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('description');
            $table->string('company', 255);
            $table->string('website', 255);
            $table->string('image' ,255);
        });

        Schema::create('portfolios', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('short_description');
            $table->integer('client_id');
        });

        Schema::create('settings', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('value', 255);
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
        Schema::drop('users');
        Schema::drop('password_resets');
        Schema::drop('boxs');
        Schema::drop('equiments');
        Schema::drop('email_patterns');
        Schema::drop('testimonials');
        Schema::drop('clients');
        Schema::drop('portfolios');
        Schema::drop('settings');
    }
}

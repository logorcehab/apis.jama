<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->enum('host', ['user', 'agency']);
            $table->integer('host_id');
            $table->string('name');
            $table->text('description');
            $table->string('contact_phone', 20)->nullable();
            $table->string('contact_email', 100)->nullable();
            $table->string('location');
            $table->json('dates');
            $table->integer('capacity')->unsigned();
            $table->json('images')->nullable();
            $table->json('promotional_video')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->boolean('display_host_message')->default(true);
            $table->json('interested_users')->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->boolean('is_free')->default(false);
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
        Schema::dropIfExists('events');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
           $table->boolean('is_verified')->default(false);
           $table->boolean('is_active')->default(false);
           $table->string('social_facebook')->nullable();
           $table->string('social_instagram')->nullable();
           $table->string('social_whatsapp')->nullable();
           $table->string('social_twitter')->nullable();
           $table->string('social_snapchat')->nullable();
           $table->json('events_hosted')->nullable();
           $table->json('events_attended')->nullable();
           $table->json('blocked_by')->nullable();
           $table->json('blocked')->nullable();
           $table->text('bio')->nullable();
           $table->date('date_of_birth')->nullable();
           $table->string('current_city')->nullable();
           $table->enum('gender', ['male', 'female', 'rather not say', 'other'])->nullable();
           $table->json('interest')->nullable();
           $table->string('profile_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('is_verified');
            $table->dropColumn('is_active');
            $table->dropColumn('social_facebook');
            $table->dropColumn('social_instagram');
            $table->dropColumn('social_whatsapp');
            $table->dropColumn('social_twitter');
            $table->dropColumn('social_snapchat');
            $table->dropColumn('events_hosted');
            $table->dropColumn('events_attended');
            $table->dropColumn('blocked_by');
            $table->dropColumn('blocked');
            $table->dropColumn('bio');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('current_city');
            $table->dropColumn('gender');
            $table->dropColumn('interest');
            $table->dropColumn('profile_image');
        });
    }
}

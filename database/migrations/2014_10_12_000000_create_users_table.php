<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('usr_id');
            $table->string('usr_name');
            $table->string('usr_email')->unique();
            $table->string('usr_phone', 15);
            $table->string('usr_profile_picture')->nullable();
            $table->string('usr_verification_token')->nullable();
            $table->timestamp('usr_email_verified_at')->nullable();
            $table->string('usr_password');
            $table->rememberToken();
            $table->biginteger('usr_created_by')->unsigned()->nullable();
            $table->biginteger('usr_updated_by')->unsigned()->nullable();
            $table->biginteger('usr_deleted_by')->unsigned()->nullable();
            $table->boolean('usr_is_active'); //kolom ini digunakan untuk users jika value 1 maka aktif jika 0 maka tidak aktif jadi sebagai pengganti soft delete
            $table->timestamps();
            $table->string('usr_sys_note')->nullable();

            $table->foreign('usr_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('usr_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('usr_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

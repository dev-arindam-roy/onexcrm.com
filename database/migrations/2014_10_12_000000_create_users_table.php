<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('hash_id')->unique();
            $table->string('hash_key')->unique();
            $table->string('salutation')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('mobile_number', 20);
            $table->string('password');
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->rememberToken();
            $table->tinyInteger('user_status')->default(0)->comment('0=PARTIAL,1=ACTIVE,2=INACTIVE,3=DELETED,4=BLOCKED,5=CLOSED');
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
        Schema::dropIfExists('users');
    }
};

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
        Schema::create('signup_partials', function (Blueprint $table) {
            $table->id();
            $table->string('salutation')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('mobile_number', 20)->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('business_name')->nullable();
            $table->string('layout_no', 25)->nullable();
            $table->tinyText('url_str')->nullable();
            $table->tinyText('url_hash')->nullable();
            $table->text('url_full')->nullable();
            $table->text('url_refer')->nullable();
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
        Schema::dropIfExists('signup_partials');
    }
};

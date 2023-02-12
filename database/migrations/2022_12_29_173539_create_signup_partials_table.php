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
        Schema::connection('mysql2')->create('signup_partials', function (Blueprint $table) {
            $table->id();
            $table->string('salutation')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('mobile_number', 12)->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('business_name')->nullable();
            $table->string('layout_no', 25)->nullable();
            $table->string('layout_language', 25)->nullable();
            $table->text('url_str')->nullable();
            $table->text('url_hash')->nullable();
            $table->text('url_full')->nullable();
            $table->text('url_refer')->nullable();
            $table->string('ip_address', 25);
            $table->string('country_code', 25)->nullable();
            $table->string('latitude', 25)->nullable();
            $table->string('longitude', 25)->nullable();
            $table->string('device');
            $table->string('os_platform')->nullable(); 
            $table->string('browser')->nullable();
            $table->text('browser_details')->nullable(); 
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
        Schema::connection('mysql2')->dropIfExists('signup_partials');
    }
};

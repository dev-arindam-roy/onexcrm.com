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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('alternative_email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('alternative_mobile_number', 12)->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('whatsapp_number', 12)->nullable();
            $table->text('full_address')->nullable();
            $table->string('pincode', 10)->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('landmark')->nullable();
            $table->string('street_no')->nullable();
            $table->tinyText('street_name')->nullable();
            $table->string('house_flat_no')->nullable();
            $table->string('house_flat_name')->nullable();
            $table->text('about_you')->nullable();
            $table->string('cover_image')->nullable();
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
        Schema::dropIfExists('user_details');
    }
};

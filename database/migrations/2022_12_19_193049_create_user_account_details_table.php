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
        Schema::create('user_account_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_account_id')->constrained('user_accounts')->onDelete('cascade');
            $table->string('business_name')->nullable();
            $table->string('official_email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('official_landline_number', 20)->nullable();
            $table->string('official_mobile_number', 20)->nullable();
            $table->string('official_fax_number', 20)->nullable();
            $table->string('official_whatsapp_number', 20)->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->timestamp('whatsapp_verified_at')->nullable();
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
            $table->text('about_organization')->nullable();
            $table->string('business_full_logo')->nullable();
            $table->string('business_mini_logo')->nullable();
            $table->string('business_banner_image')->nullable();
            $table->timestamps();
            $table->index(['business_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_account_details');
    }
};

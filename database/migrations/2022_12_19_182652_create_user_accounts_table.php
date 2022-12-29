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
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('account_id')->unique();
            $table->tinyInteger('is_owner')->default(0)->comment('0=NO,1=YES');
            $table->string('account_name')->nullable();
            $table->tinyInteger('account_status')->default(0)->comment('0=PARTIAL,1=ACTIVE,2=INACTIVE,3=DELETED,4=BLOCKED,5=CLOSED');
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
        Schema::dropIfExists('user_accounts');
    }
};

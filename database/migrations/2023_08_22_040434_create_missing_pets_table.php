<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissingPetsTable extends Migration
{
    public function up()
    {
        Schema::create('missing_pets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('pet_name');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('type', ['Dog', 'Cat']);
            $table->string('species')->nullable();
            $table->unsignedSmallInteger('age_years')->nullable();
            $table->unsignedTinyInteger('age_months')->nullable();
            $table->string('pictures')->nullable();
            $table->string('notable_features')->nullable();
            $table->string('last_seen_location')->nullable();
            $table->text('description')->nullable();
            $table->string('contact_social_media')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->enum('status', ['pending', 'open', 'solved', 'cancelled'])->default('pending');
            $table->date('missing_since')->nullable();
            $table->date('date_found')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('missing_pets');
    }
}




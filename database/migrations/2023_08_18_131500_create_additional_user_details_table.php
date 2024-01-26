<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalUserDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('additional_user_details', function (Blueprint $table) {
            $table->id();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('street')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('occupation')->nullable();
            $table->string('spouse')->nullable();
            $table->text('children_names')->nullable();
            $table->text('current_household_pets')->nullable();
            $table->boolean('visit_veterinarian')->nullable();
            $table->string('valid_id')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('additional_user_details');
    }
}


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptionStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_status', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adoption_request_id');
            $table->enum('status', ['pending', 'approved', 'declined', 'cancelled'])->default('pending');
            $table->timestamps();

            $table->foreign('adoption_request_id')->references('id')->on('adoption_requests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adoption_status');
    }
}


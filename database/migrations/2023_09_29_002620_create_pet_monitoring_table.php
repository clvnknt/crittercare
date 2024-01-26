<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetMonitoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_monitoring', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id');
            $table->enum('condition', ['Good', 'Fair', 'Poor'])->default('Good');
            $table->enum('status', ['Monitoring', 'Stopped'])->default('Monitoring');
            $table->unsignedBigInteger('monitoring_user_id')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('note_added_at')->nullable();
            $table->timestamps();

            // Add a foreign key relationship to the 'pets' table
            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
            
            // Add a foreign key relationship to the 'users' table for monitoring_user_id
            $table->foreign('monitoring_user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_monitoring');
    }
}

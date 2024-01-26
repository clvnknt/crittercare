<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pet_surrenders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('pet_name');
            $table->text('reason');
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->date('surrender_date')->nullable();
            $table->unsignedSmallInteger('age_years')->nullable();
            $table->unsignedTinyInteger('age_months')->nullable();
            $table->enum('type', ['Dog', 'Cat'])->default('Dog');
            $table->string('species')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_surrenders');
    }
};

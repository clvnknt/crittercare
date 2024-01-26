<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('pet_name');
            $table->enum('type', ['Dog', 'Cat'])->default('Dog');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('species')->nullable();
            $table->unsignedSmallInteger('age_years')->nullable();
            $table->unsignedTinyInteger('age_months')->nullable();
            $table->text('description')->nullable();
            $table->enum('up_for_adoption', ['Yes', 'No', 'Processing', 'Adopted'])->default('No');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('pets');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('case_type_id');
            $table->text('description');
            $table->enum('status', ['pending', 'acknowledged', 'solved', 'cancelled'])->default('pending');
            $table->string('picture')->nullable(); // Add picture column
            $table->string('video')->nullable();   // Add video column
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('case_type_id')->references('id')->on('case_types')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
};


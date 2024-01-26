<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseTypesTable extends Migration
{
    public function up()
    {
        Schema::create('case_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('severity', ['Low', 'Medium', 'High'])->nullable();
            $table->enum('type', ['Dog', 'Cat', 'Others'])->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('case_types');
    }
}

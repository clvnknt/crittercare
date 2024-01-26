<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDemotedAtToDemotionsTable extends Migration
{
    public function up()
    {
        Schema::table('demotions', function (Blueprint $table) {
            $table->timestamp('demoted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('demotions', function (Blueprint $table) {
            $table->dropColumn('demoted_at');
        });
    }
}


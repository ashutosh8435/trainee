<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToSeeder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seeder', function (Blueprint $table) {
            $table->string('phone_number')->unique();
            $table->enum('gender',['male','female']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seeder', function (Blueprint $table) {
           $table->dropColumn('phone_number');
            $table->dropColumn('gender');
        });
    }
}

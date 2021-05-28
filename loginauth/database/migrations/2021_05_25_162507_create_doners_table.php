<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doners', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> integer('age');
            $table -> string('blood_group');
            $table -> string('city');
            $table -> string('state');
            $table -> integer('zip');
            $table -> biginteger('mobile')->unique();
            $table -> string('email')->unique();
            $table -> string('id_proof');
            $table -> boolean('verify');
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
        Schema::dropIfExists('doners');
    }
}

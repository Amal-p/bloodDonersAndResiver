<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resivers', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> string('blood_group');
            $table -> integer('unit');
            $table -> biginteger('mobile');
            $table -> string('patient_name');
            $table -> string('hospital');
            $table -> date('required_date');
            $table -> date('application_date');
            $table -> boolean('verify');
            $table -> string('email');
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
        Schema::dropIfExists('resivers');
    }
}

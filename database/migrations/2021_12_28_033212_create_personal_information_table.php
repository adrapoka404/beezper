<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('fechanacimiento')->require();
            $table->string('genero')->require();
            $table->string('movil')->require();
            $table->string('nacionalidad')->require();
            $table->string('curp')->require();
            $table->string('rfc')->require();
            $table->foreignId('activity_id')->nullable()->index();
            $table->foreignId('income_id')->nullable()->index();
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
        Schema::dropIfExists('personal_information');
    }
}

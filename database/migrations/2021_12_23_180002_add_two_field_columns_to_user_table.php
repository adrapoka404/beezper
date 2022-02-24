<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTwoFieldColumnsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            Schema::table('users', function (Blueprint $table) {
                $table->text('apaterno')
                        ->after('name')
                        ->nullable();
    
                $table->text('amaterno')
                        ->after('apaterno')
                        ->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('apaterno', 'amaterno');           
        });

    }
}

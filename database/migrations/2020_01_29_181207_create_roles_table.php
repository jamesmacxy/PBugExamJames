<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        DB::table('roles')->insert(
        array(
            'name' => 'Admin',
            'description' => 'Admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        )
        );

        DB::table('roles')->insert(
        array(
            'name' => 'User',
            'description' => 'User',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}

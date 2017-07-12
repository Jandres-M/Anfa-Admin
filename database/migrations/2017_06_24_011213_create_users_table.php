<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->enum('rol',['Dirigente','Directivo'])->default('Dirigente');
            $table->string('password', 60);
            $table->enum('estado',['Habilitado','Deshabilitado'])->default('Habilitado');
            //idclub aun no
            $table->integer('idClub')->unsigned()->nullable();

            $table->foreign('idClub')->references('idClub')->on('clubes');

            $table->rememberToken();
    
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
        Schema::drop('usuarios');
    }
}

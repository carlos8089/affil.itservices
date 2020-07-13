<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Membre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('membre', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nom', 100)->default('John');
            $table->string('prenom', 100)->default('Doe');
            $table->mail('email', 30)->nullable()->unique();
            $table->string('tel', 30)->unique();
            $table->id('package', 30);
            
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
        //
        Schema::dropIfExists('membre');
    }
}

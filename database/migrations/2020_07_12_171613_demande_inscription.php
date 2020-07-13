<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DemandeInscription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('deminsc', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nom', 100)->default('John');
            $table->string('prenom', 100)->default('Doe');
            $table->mail('email', 30)->nullable()->unique();
            $table->string('tel', 30)->unique();
            $table->string('package', 30);
            $table->string('codepmt', 25)->nullable();
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
        Schema::dropIfExists('deminsc');
    }
}

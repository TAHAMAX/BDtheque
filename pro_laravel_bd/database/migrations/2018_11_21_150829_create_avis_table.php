<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis', function (Blueprint $table) {
            $table->increments('avis_Id');
            $table->string('avis_Avis');
            $table->string('avis_Note');
            $table->string('avis_Collection');
            $table->string('avis_Envies');
            $table->unsignedInteger('avis_table_BD_fk');
            $table->foreign('avis_table_BD_fk')
                      ->references('table_BD_Id')
                      ->on('table_BD')
                      ->onDelete('cascade');
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
        Schema::dropIfExists('avis');
    }
}
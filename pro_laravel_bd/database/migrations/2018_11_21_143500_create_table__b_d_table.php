<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_BD', function (Blueprint $table) {
            $table->increments('table_BD_Id');
            $table->string('table_BD_Identifiant');
            $table->string('table_BD_Editeur');
            $table->string('table_BD_Isbn');
            $table->string('table_BD_Img');
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
        Schema::dropIfExists('table_BD');
    }
}

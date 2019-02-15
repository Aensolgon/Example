<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkmenus', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nameRu")->default(null);   
            $table->string("nameEn")->default(null);
            $table->string("linkEn")->default(null);
            $table->string("linkRu")->default(null);
            $table->integer("parentId")->default(0);
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
        Schema::dropIfExists('linkmenus');
    }
}

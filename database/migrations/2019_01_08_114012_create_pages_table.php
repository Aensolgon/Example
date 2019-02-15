<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string("meta_title_en")->default(null);
            $table->string("meta_keywords_en")->default(null);
            $table->string("meta_description_en")->default(null);
            $table->string("meta_canonical_en")->default(null);
            $table->string("content_en")->default(null);

            $table->string("meta_title_ru")->default(null);
            $table->string("meta_keywords_ru")->default(null);
            $table->string("meta_description_ru")->default(null);
            $table->string("meta_canonical_ru")->default(null);
            $table->string("content_ru")->default(null);

            $table->integer("linkmenu_id")->default(0);
            $table->string("admin_title")->default(null);

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
        Schema::dropIfExists('pages');
    }
}

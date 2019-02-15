<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogEnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_ens', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title")->nullable();
            $table->string("title_second")->nullable();
            $table->integer('category_blog_id')->default(0);
            $table->string("img_path")->nullable();
            $table->string("short_text")->nullable();
            $table->longText("content")->nullable();
            $table->string("meta_title")->default(null);
            $table->string("meta_keywords")->default(null);
            $table->string("meta_description")->default(null);
            $table->string("meta_canonical")->default(null);
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
        Schema::dropIfExists('blog_ens');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Jialeo\LaravelSchemaExtend\Schema;

class CreateArticleClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_classes', function (Blueprint $table) {
            $table->id();
            $table->string('title',50)->unique()->comment('分类名称');
            $table->unsignedBigInteger('parent_id')->nullable()->comment('父ID');
            $table->unsignedTinyInteger('sort')->default(255)->comment('排序');
            $table->foreign('parent_id')->references('id')->on('article_classes')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->comment="文章分类表";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_classes');
    }
}

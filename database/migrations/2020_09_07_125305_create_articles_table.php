<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Jialeo\LaravelSchemaExtend\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ac_id')->index()->comment('分类ID');
            $table->string('title',100)->unique()->comment('文章标题');
            $table->string('author',30)->comment('作者');
            $table->unsignedBigInteger('account_id')->index()->comment('发布人ID');
            $table->text('content')->nullable()->comment('内容');
            $table->string('url')->nullable()->comemnt('跳转链接');
            $table->unsignedTinyInteger('sort')->default(255)->comment('排序');
            $table->boolean('is_show')->default(true)->comment('是否显示，0为否，1为是，默认为1');
            $table->foreign('ac_id')->references('id')->on('article_classes')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
            $table->comment = '文章表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

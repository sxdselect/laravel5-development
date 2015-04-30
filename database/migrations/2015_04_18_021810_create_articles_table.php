<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_articles', function(Blueprint $table)
		{
			$table->increments('art_id');
			$table->integer('art_cat_id'); # 分类ID
			$table->string('art_title'); # 文章标题
			$table->string('art_alias'); # 文章别名
			$table->string('art_introtext'); # 文章简要
			$table->mediumtext('art_fulltext'); # 文章内容
			$table->boolean('art_status')->default(false); # 文章状态
			$table->integer('art_created'); # 创建人
			$table->string('art_nickname', 100)->default(''); # 发布人笔名
			$table->json('art_metadata')->default(''); # 存在头信息以及Seo信息
			$table->json('art_images')->default(''); # 存储导引图片
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
		Schema::drop('cms_articles');
	}

}

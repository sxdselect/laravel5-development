<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_categories', function(Blueprint $table)
		{
			$table->increments('cat_id');
			$table->integer('cat_parent')->default(0); # 父级ID
			$table->integer('cat_lft')->default(0); # 左值
			$table->integer('cat_rgt')->default(0); # 右值
			$table->integer('cat_lvl')->default(0); # 层级
			$table->integer('cat_path')->default(0); # 层级
			$table->string('cat_title'); # 分类名称
			$table->string('cat_alias'); # 分类别名
			$table->text('cat_remark')->default(''); # 分类备注
			$table->boolean('cat_status')->default(true); # 分类状态
			$table->json('cat_params'); # 分类参数
			$table->json('cat_metadata'); # 分类头信息以及Seo信息
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
		Schema::drop('cms_categories');
	}

}

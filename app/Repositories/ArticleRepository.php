<?php namespace App\Repositories;

use App\Models\Articles, App\Models\Categories, App\Models\User;

/**
 * 文章行为模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : public
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : app/Repositories/ArticleRepository.php
 +----------------------------------------------------------
 */
class ArticleRepository extends BaseRepository
{
    /**
     * The User instance.
     *
     * @var App\Models\User
     */
    protected $user;

    /**
     * The Categories instance.
     *
     * @var App\Models\categories
     */
    protected $categories;

    /**
     * 初始化文章行为
     *
     * @param  App\Models\User $user
     * @param  App\Models\Articles $article
     * @param  App\Models\Categories $categories
     * @return void
     */
    public function __construct(
        User $user,
        Articles $article,
        Categories $categories)
    {
        $this->user = $user;
        $this->model = $article;
        $this->categories = $categories;
    }

    /**
     * 获取文章详细信息
     *
     * @param  App\Models\User $user
     * @param  App\Models\Articles $article
     * @param  App\Models\Categories $categories
     * @return void
     */
    public function getArticleInfo($id)
    {
        return $this->model->with('category', 'user')->find($id);
    }
}
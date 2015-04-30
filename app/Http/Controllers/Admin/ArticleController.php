<?php
namespace App\Http\Controllers\Admin;

use App\Repositories\UserRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\CategoriesRepository;
use App\Http\Controllers\AdminController;
/**
 * 文章管理模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : auth
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : app/Http/Controllers/Admin/ArticleController.php
 +----------------------------------------------------------
 */
class ArticleController extends AdminController 
{
    /**
     * 文章行为接口.
     *
     * @var App\Repositories\ArticleRepository
     */
    protected $articleGestion;

    /**
     * 用户行为接口.
     *
     * @var App\Repositories\UserRepository
     */
    protected $userGestion;

    /**
     * 文章分类接口.
     *
     * @var App\Repositories\CategoriesRepository
     */
    protected $categoriesGestion;

    /**
     * 每页文章数量
     *
     * @var int
     */
    protected $nbrPages;

    /**
     * 初始化行为
     *
     * @param  App\Repositories\ArticleRepository $articleGestion
     * @param  App\Repositories\CategoriesRepository $categoriesGestion
     * @param  App\Repositories\UserRepository $userGestion
     * @return void
    */
    public function __construct(
        ArticleRepository $articleGestion,
        CategoriesRepository $categoriesGestion,
        UserRepository $userGestion)
    {
        $this->userGestion = $userGestion;
        $this->articleGestion = $articleGestion;
        $this->categoriesGestion = $categoriesGestion;
        $this->nbrPages = 2;
    }

	/**
     * 文章列表页
     *
     * @return Response
     */
    public function index()
    {
        # $users = $this->userGestion->getUser(array('usr_id' => 2));
        # $articles = $this->articleGestion->getArticle($this->nbrPages);
        # $categories = $this->categoriesGestion->getCategories();
        return view('admin.article.index');
    }

    /**
     * 添加视图
     *
     * @return Response
     */
    public function create()
    {
        # 分类
        return view('admin.article.create');
    }

    /**
     * 处理添加事务
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * 显示视图
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $article = $this->articleGestion->getArticleInfo($id);
        return view('admin.article.show', compact('article'));
    }

    /**
     * 编辑视图
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.article.edit');
    }

    /**
     * 处理编辑事务
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * 处理删除事务
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->articleGestion->destroy($id);

        return redirect('article')->with('ok', trans('back/blog.destroyed'));
    }
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 分类数据视图模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : public
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : app/Models/Categories.php
 +----------------------------------------------------------
 */
class Categories extends Model 
{
    /**
     * 定义数据表表名
     *
     * @var string
     */
    protected $table = 'cms_categories';

    /**
     * 定义模型表主键
     *
     * @var string
     */
    protected $primaryKey = 'art_id';

    /**
     * 默认使用时间戳戳功能
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 数据可修改字段.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * 数据不可修改字段
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * 隐藏数据表字段数据.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * 文章分类一对多关联映射
     *
     * @return Illuminate\Database\Eloquent\Relations\belongToMany
     */
    public function article()
    {
        return $this->hasMany('App\Models\Articles');
    }
}

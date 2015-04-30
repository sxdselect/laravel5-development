<?php 
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * 用户数据视图模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : public
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : app/Models/User.php
 +----------------------------------------------------------
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * 定义数据表表名
	 *
	 * @var string
	 */
	protected $table = 'usr_users';

	/**
     * 定义模型表主键
     *
     * @var string
     */
    protected $primaryKey = 'usr_id';

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
	protected $fillable = ['usr_username', 'usr_email', 'usr_password'];

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
	protected $hidden = ['usr_password', 'remember_token'];

    /**
     * A User has many Articles
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function article()
    {
        return $this->hasMany('App\Models\Articles');
    }
}

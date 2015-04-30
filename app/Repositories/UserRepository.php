<?php namespace App\Repositories;

use App\Models\User;

/**
 * 用户行为模块 [ WE CAN DO IT JUST THINK IT ]
 +----------------------------------------------------------
 * Author       : morph
 +----------------------------------------------------------
 * Revision     : public
 +----------------------------------------------------------
 * Date         : 2014.08.20
 +----------------------------------------------------------
 * Position     : app/Repositories/UserRepository.php
 +----------------------------------------------------------
 */
class UserRepository extends BaseRepository
{
    /**
     * 初始化文章行为
     *
     * @param  App\Models\User $user
     * @param  App\Models\Articles $article
     * @param  App\Models\Categories $categories
     * @return void
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

	/**
	 * 获取用户列表.
	 *
	 * @param  array  $options
	 * -----------------------
	 * usr_id
	 * usr_email
	 * usr_username
	 * where
	 * limit
	 * offset
	 * orderby
	 *
	 * @return array(usr_id => array())
	 */
    public function getAllUser($options = array())
	{
        $aReturn = array();
        return $aReturn;
	}
}
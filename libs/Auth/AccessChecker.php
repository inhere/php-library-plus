<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 16/9/1
 * Time: 下午4:51
 */

namespace Inhere\LibraryPlus\Auth;

/**
 * Class AccessChecker
 * @package Inhere\LibraryPlus\Auth
 */
class AccessChecker implements CheckAccessInterface
{
    /**
     * @param $userId
     * @param $permission
     * @param array $params
     * @return bool
     */
    public function checkAccess($userId, $permission, $params = [])
    {
        return true;
    }
}

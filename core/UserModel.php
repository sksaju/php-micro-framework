<?php 

namespace app\core;

/**  
 * Class UserModel 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core
 */

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
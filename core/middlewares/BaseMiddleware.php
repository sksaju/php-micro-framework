<?php 

namespace app\core\middlewares;

/**  
 * Class BaseMiddleware 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core\middlewares
 */

abstract class BaseMiddleware
{
    abstract public function execute();
}
<?php 

namespace app\core;

/**  
 * Class Application 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core
 */

class Application
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }
}
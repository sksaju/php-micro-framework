<?php 

namespace app\controllers;

use app\core\Application;

/**  
 * Class Controller 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\controllers
 */

class Controller
{
    public function render($view, $params=[])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
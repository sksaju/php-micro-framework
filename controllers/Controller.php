<?php 

namespace app\controllers;

use sksaju\phpmvc\Application;
use sksaju\phpmvc\middlewares\BaseMiddleware;

/**  
 * Class Controller 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\controllers
 */

class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var sksaju\phpmvc\middlewares\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params=[])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return sksaju\phpmvc\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}
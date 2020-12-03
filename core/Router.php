<?php 

namespace app\core;

/**  
 * Class Router 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core
 */

class Router
{
    public Request $request;
    protected array $routes = [];

    /**  
     * Router constructor.
     * 
     * @param \app\core\Request $request
     */
    public function __construct(\app\core\Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            echo "404 Not Found";
            exit;
        }

        echo call_user_func($callback);
    }
}
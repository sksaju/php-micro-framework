<?php 

namespace app\core;

use app\controllers\Controller;

/**  
 * Class Application 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core
 */

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;

    /**  
     * Application constructor.
     * 
     * @param string $ROOT_DIR
     */
    public function __construct($ROOT_DIR)
    {
        self::$app = $this;
        self::$ROOT_DIR = $ROOT_DIR;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    public function getController()
    {
        return $this->controller;
    }

    public function setController(Controller $controller)
    {
        $this->controller = $controller;
    }
}
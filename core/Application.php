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
    public Session $session;
    public Database $db;


    public static Application $app;
    public Controller $controller;

    /**  
     * Application constructor.
     * 
     * @param string $ROOT_DIR
     * @param array $config
     */
    public function __construct($ROOT_DIR, $config)
    {
        self::$app = $this;
        self::$ROOT_DIR = $ROOT_DIR;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);

        $this->db = new Database($config['db']);
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
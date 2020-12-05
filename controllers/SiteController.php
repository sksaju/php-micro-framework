<?php 

namespace app\controllers;

use app\core\Application;

/**  
 * Class SiteController 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\controllers
 */

class SiteController
{
    public function home()
    {
        $params = [
            'message' => 'Welocome here'
        ];

        return Application::$app->router->renderView('home', $params);
    }

    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function handContact()
    {
        return 'handle contact';
    }
}
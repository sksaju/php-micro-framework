<?php 

namespace app\controllers;

use sksaju\phpmvc\Application;
use sksaju\phpmvc\middlewares\AuthMiddleware;
use sksaju\phpmvc\Request;
use sksaju\phpmvc\Response;
use app\models\LoginForm;
use app\models\User;

/**  
 * Class AuthController 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\controllers
 */

class AuthController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response)
    {
        $loginForm = new LoginForm();
        if ($request->isPost()) {
            $loginForm->loadData($request->body());
            if ($loginForm->validate() && $loginForm->login()) {
                $response->redirect('/');
                return;
            }
        }

        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm,
        ]);
    }

    public function register(Request $request)
    {
        $user = new User();
        if ($request->isPost()) {
            $user->loadData($request->body());
            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'Registration Successful');
                Application::$app->response->redirect('/');
            }
        }
        
        return $this->render('register', [
            'model' => $user,
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function profile()
    {
        return $this->render('profle');
    }
}
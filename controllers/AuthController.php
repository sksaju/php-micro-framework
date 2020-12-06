<?php 

namespace app\controllers;

use app\core\Request;
use app\models\RegisterModel;

/**  
 * Class AuthController 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\controllers
 */

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isPost()) {
            return 'Handle submitted data';
        }
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $registerModel = new RegisterModel();
        if ($request->isPost()) {
            $registerModel->loadData($request->body());
            if ($registerModel->validate() && $registerModel->register()) {
                return 'Successful';
            }
            var_dump($registerModel->errors);
        }
        return $this->render('register', [
            'errors' => $registerModel->errors,
        ]);
    }
}
<?php 

namespace app\controllers;

use app\core\Request;
use app\models\User;

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
        $user = new User();
        if ($request->isPost()) {
            $user->loadData($request->body());
            if ($user->validate() && $user->save()) {
                return 'Successful';
            }
        }
        
        return $this->render('register', [
            'model' => $user,
        ]);
    }
}
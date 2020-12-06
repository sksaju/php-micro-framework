<?php 

namespace app\controllers;

use app\core\Request;

/**  
 * Class SiteController 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\controllers
 */

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'message' => 'Welocome here'
        ];

        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $data = $request->body();
        return 'handle contact';
    }
}
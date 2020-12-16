<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Request;
use app\core\Response;
use app\models\ContactForm;

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
            'message' => 'PHP MVC Framework'
        ];

        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loadData($request->body());
            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                $response->redirect('/contact');
                return;
            }
        }
        
        return $this->render('contact', [
            'model' => $contact,
        ]);
    }

    public function handleContact(Request $request)
    {
        $data = $request->body();
        return 'Handle submitted data';
    }
}
<?php 

namespace app\core;

/**  
 * Class View 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core
 */

class View
{
    public string $title = '';

    public function renderView($view, $params = [])
    {
        $viewContent = $this->renderViewOnly($view, $params);
        $layoutContent = $this->layoutContent($view);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent($view)
    {
        $layout = Application::$app->layout;
        if (Application::$app->controller) {
            $layout = Application::$app->controller->layout;
        }
        ob_start();
        include_once Application::$ROOT_DIR."./views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function renderViewOnly($view, $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include_once Application::$ROOT_DIR."./views/$view.php";
        return ob_get_clean();
    }
}
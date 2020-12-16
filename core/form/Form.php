<?php 

namespace app\core\form;

use app\core\Model;

/**  
 * Class Form 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core\form
 */

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        return '</form>';
    }

    public function field(Model $model, string $attribute)
    {
        return new InputField($model, $attribute);
    }
}
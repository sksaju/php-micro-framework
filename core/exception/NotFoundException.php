<?php 

namespace app\core\exception;

/**  
 * Class NotFoundException 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core\exception
 */

class NotFoundException extends \Exception
{
    protected $code = 404;
    protected $message = 'Page not found';
}
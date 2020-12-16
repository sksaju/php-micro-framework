<?php 

namespace app\core\exception;

/**  
 * Class ForbiddenException 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core\exception
 */

class ForbiddenException extends \Exception
{
    protected $code = 403;
    protected $message = 'You don\'t have permission to access this page';
}
<?php

namespace app\core;

/**  
 * Class Request 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core
 */

class Response
{
    public function setStatusCode(int $code) {
        http_response_code($code);
    }

    public function redirect(string $string)
    {
        header("location: $string");
    }
}
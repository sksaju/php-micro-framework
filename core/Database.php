<?php 

namespace app\core;

use PDO;

/**  
 * Class Database 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core
 */

class Database
{
    public \PDO $pdo;

    /**  
     * Database constructor.
     * 
     * @param array $config
     */
    public function __construct($config)
    {
        $dsn = $config['dsn'] ?? '';
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';
        $this->pdo = new PDO($dsn, $user, $password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}
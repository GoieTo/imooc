<?php
namespace core\lib;

class model extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=mydbpdo';
        $username = 'root';
        $passwd = 'root';
        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $e) {

        }
    }
}

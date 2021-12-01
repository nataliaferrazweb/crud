<?php
/**
 * User: Natalia Ferraz
 */

namespace App\Models\DAO;


abstract class Conection
{
    /**
     * @var \PDO
     */
    protected $pdo;

    public function __construct()
    {
        $host = $_ENV['PROJECT_MYSQL_HOST'];
        $port = $_ENV['PROJECT_MYSQL_PORT'];
        $user = $_ENV['PROJECT_MYSQL_USER'];
        $pass = $_ENV['PROJECT_MYSQL_PASSWORD'];
        $dbname = $_ENV['PROJECT_MYSQL_DBNAME'];

        $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";

        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }
}
<?php
namespace Core;
use PDO;
class Database
{
    private $host = "localhost";
    private $db   = "hotdog";
    private $user = "root";
    private $pass = "";

  
    public function conectar()
    {
        try {
            $conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db};charset=utf8",
                $this->user,
                $this->pass
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch (\PDOException $e) {

            die("Erro na conexão: " . $e->getMessage());
        }
    }
}


?>
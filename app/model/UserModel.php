<?php
require_once __DIR__ . '/../../config/Database.php';
class UserModel{

    private $conn; 

    public function __construct(){

        $database = new Database;
       $this->conn = $database->conectar();
    }

    public function autenticar ($email, $senha) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ? LIMIT 1");
        $stmt->execute([$email,$senha]);

          return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}
 
?>
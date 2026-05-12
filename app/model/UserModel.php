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
    public function cadastro(){
        $stmt = $this->conn->prepare("INSERT INTO usuarios (nome,email,cpf,senha,tipo) VALUES ?,?,?,?,?");
        $stmt->execute([$nome,$email,$cpf,$senha,'cliente']);
    }
    public function validar(){
        $stmt = $this->conn->prepare("SELECT email FROM usuarios");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }


}
 
?>
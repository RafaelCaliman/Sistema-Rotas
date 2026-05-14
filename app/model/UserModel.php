<?php
namespace App\Model;
use Core\Database;
use PDO;

class UserModel{

    private $conn; 

    public function __construct(){

        $database = new Database;
       $this->conn = $database->conectar();
    }

    public function autenticar($email, $senhaDigitada) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($user && password_verify($senhaDigitada, $user['senha'])) {
        return $user;
    }
    return false;
}   
    public function cadastro($nome,$email,$cpf,$senha){

        $senhaHash = password_hash($senha,PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("INSERT INTO usuarios (nome,email,cpf,senha,tipo) VALUES (?,?,?,?,?)");

         return $stmt->execute([$nome,$email,$cpf,$senhaHash,'cliente']);
    }
    public function validar($email){
        $stmt = $this->conn->prepare("SELECT email FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }


}
 
?>
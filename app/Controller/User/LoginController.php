<?php
require_once '../app/model/UserModel.php';
require_once '../app/Controller/BaseController.php';

class LoginController extends BaseController{

    private $model;

    public function __construct()
    {
        $this->model = new UserModel;
    }

    public function index(){

        $this->render('login');
        
    }

    public function autenticar(){
        $email = $_POST['email'] ?? '' ;
        $senhaDigitada = $_POST['senha'] ?? '';
        
        $user = $this->model->autenticar($email,$senhaDigitada);

          if($user){
            $senhahash = $user['senha'];
            if(password_verify($senhaDigitada,$senhahash)){

            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['tipo'] = $user['tipo'];
            $_SESSION['logado'] = true;

            if($user['tipo'] == 'admin'){

            header('Location: ' . BASE_URL);
            exit;

            }
            elseif($user['tipo'] == 'cliente'){

            header('Location: ' . BASE_URL);
            exit;
            }
        } else{
            $_SESSION['senha_invalida'] = 'Senha Incorreta';
            

        }
     }  
     else {
            $_SESSION['logado'] = FALSE;
            $_SESSION['erro_login'] = "E-mail ou senha incorretos.";
            header('Location: ' . BASE_URL . '/login');
            exit;
        } 
    }

}


?>
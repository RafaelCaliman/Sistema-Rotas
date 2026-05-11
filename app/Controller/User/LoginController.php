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
        $senha = $_POST['senha'] ?? '';
        
        $user = $this->model->autenticar($email,$senha);

          if($user){

            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['tipo'] = $user['tipo'];
            $_SESSION['logado'] = true;

            if($user['tipo'] == 'admin'){

            header('Location:  /Rotas');
            exit;

            }
            elseif($user['tipo'] == 'cliente'){

            header('Location: /Rotas');
            exit;
            } 
        }  

        else {
            $_SESSION['logado'] = FALSE;
            $_SESSION['erro_login'] = "E-mail ou senha incorretos.";
            header('Location: /Rotas/login');
            exit;
        } 
    }

}


?>
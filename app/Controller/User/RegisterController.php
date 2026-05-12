<?php
require_once __DIR__ . '/../BaseController.php';
require_once '../app/model/UserModel.php';


class RegisterController extends BaseController{
    private $model;
    public function __construct() {
        $this->model = new UserModel;
    }
    public function create(){

        $this->render('cadastrar');
    }
    public function store(){
        $valida = $this->model->valida();

        if(!$valida){
        $_POST['nome'] ?? "";

        echo'entrei no valida';


        

        } else{
            echo'User Cadastrado';
        }

    }
}



?>
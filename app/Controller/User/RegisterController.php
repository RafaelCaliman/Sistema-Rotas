<?php
require_once __DIR__ . '/../BaseController.php';


class RegisterController extends BaseController{
    public function create(){

        $this->render('cadastrar');
    }
}



?>
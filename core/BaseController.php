<?php
namespace Core;
class BaseController{
    public function render($view){

        require_once "../app/views/$view.php";

    }
    public function isAdmin(){
        if($_SESSION['logado'] == true && $_SESSION['tipo'] == 'admin'){

            return true;

        } else{
            return false;
        }
    }
}


?>
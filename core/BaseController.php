<?php
namespace Core;
class BaseController{
    public function render($view){

        require_once "../app/views/$view.php";

    }
    public function redirect(){
        if(isset($_SESSION['logado'])){

            

        }
    }
}


?>
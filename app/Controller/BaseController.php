<?php

class BaseController{
    public function render($view){

        require_once "../app/views/$view.php";

    }
}


?>
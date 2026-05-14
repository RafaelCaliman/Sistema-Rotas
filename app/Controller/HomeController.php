<?php
namespace App\Controller;

use Core\BaseController;

class Homecontroller extends BaseController{
    public function index(){
        
        $this->redirect();  
        
        require_once '../app/views/home.php';
    }
}

?>
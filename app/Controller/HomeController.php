<?php
namespace App\Controller;

use Core\BaseController;

class Homecontroller extends BaseController{
    public function index(){

        $this->render('home/home');
        
    }
}

?>
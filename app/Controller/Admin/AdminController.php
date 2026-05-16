<?php
namespace App\Controller\Admin;

use Core\BaseController;

class AdminController extends BaseController{

    public function index(){
        if($this->isAdmin()){
            $this->render('admin/administrativo');
        } else{
            header('Location: ' . BASE_URL);
            exit;
        }
    }

}



?>
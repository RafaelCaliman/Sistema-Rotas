<?php
namespace App\Controller\Product;

use Core\BaseController;

class ProductController extends BaseController{

   public function index($id) {

      echo "Sucesso! O ID capturado dinamicamente foi: " . $id;
}
}

?>
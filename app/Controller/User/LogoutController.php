<?php
class LogoutController{

      public function logout(){
        session_destroy();
        header('Location: ' . BASE_URL);
        exit;
    }
}

?>
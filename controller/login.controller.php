<?php
require_once 'model/login.php';

class loginController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model =  new LoginModel();
    }
    
    public function Index() {
        require_once 'view/login/login.php';
    }

    public function checkLogin() {
        $milogin = new LoginModel();
        
        $las = $this->model->CheckLogin($_REQUEST['user'], $_REQUEST['contra']);
        
        echo $las;
    }
}
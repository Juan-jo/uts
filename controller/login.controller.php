<?php
require_once 'model/login.php';

class loginController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model =  new LoginModel();
    }
    
    public function Index() {
        if(isset($_REQUEST['msg'])){
            $msg = $_REQUEST['msg'];
        }
        require_once 'view/login/login.php';
    }

    public function checkLogin() {
        session_start();
        $las = $this->model->CheckLogin($_REQUEST['user'], $_REQUEST['contra']);
        
        echo $las->Tipo;
        if($las != null) {
            if($las->Tipo == 'Alumno'){ 
                $_SESSION['LoginType'] = 1;    
            }
            else{
                $_SESSION['LoginType'] = 2;
            }
           
            $_SESSION['LoginID'] = $las->id;

            if($las->Tipo == 'Alumno'){
                header('Location: index.php?c=alumno');
            }
            else{
                header('Location: index.php?c=docente');
            }
        }
        else {
            header('Location: index.php?c=login&msg="Error de contraseña"');
        }
    }

    public function Logout(){
        session_start();
        unset($_SESSION["LoginType"]);
        unset($_SESSION["LoginID"]);
        header('Location: index.php?c=login');
    }
}
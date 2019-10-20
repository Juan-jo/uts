<?php

class alumnoController{

    public function __construct() {

    }
    
    public function Index() {   
        if($_SESSION['LoginType'] == 2)
        {
            header("Location: index.php?c=docente");
        }
        else
        {
            require_once 'view/header.php';
            require_once 'view/dasboard/alumno/perfil.php';  
        }
    }   
}
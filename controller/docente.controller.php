<?php

class docenteController{

    public function __construct(){
    }
    
    public function Index() {
        
        if($_SESSION['LoginType'] == 1)
        {
            header("Location: index.php?c=alumno");
        }
        else{
            require_once 'view/header.php';
            require_once 'view/dasboard/docente/perfil.php';  
        }
        
    }   
}
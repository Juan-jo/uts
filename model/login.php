<?php
class LoginModel {
    private $pdo;

    public $id;
    public $Nombre;
    public $tipo;

    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::StartUp();   
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function CheckLogin($user, $password) {
        try {

            $stmt = $this->pdo->prepare("CALL check_login(?,?)");
            $stmt->bindValue(1, $user, PDO::PARAM_STR);
            $stmt->bindValue(2, $password, PDO::PARAM_STR);
            $stmt->execute();
            
            $registro=$stmt->fetch();
            echo $registro["Tipo"];

            if($registro["id"] != null) {
                $model = new LoginModel();
                $model->id = $registro["id"];
                $model->Nombre = $registro["Nombre"];
                $model->Tipo = $registro["Tipo"];
                return $model;
            }
            else{
                return null;
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}
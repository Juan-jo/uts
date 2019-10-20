<?php
class LoginModel {
    private $pdo;

    public $id;
    public $Nombre;
    

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
            return $stmt->fetch(PDO::FETCH_OBJ);

        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}
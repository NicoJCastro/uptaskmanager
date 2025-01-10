<?php 

namespace Controllers;

class LoginController {
    
    public static function login(){
        echo "Desde el login";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
        }
    }

    public static function logout(){
        echo "Desde Logout";
    }

    public static function create() {

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
        }
    }

    public static function forgotPassword() {
        echo "Forgot Password";
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
        }
    }

    public static function resetePassword() {
        echo "Resete Password";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
        }
    }

    public static function mesageConfirm() {
        echo "Mesage confirm";

       
    }

    public static function confirm() {
        echo "Confirm";

       
    }
}

?>
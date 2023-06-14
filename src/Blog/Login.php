<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    class Login
    {
        private function __construct(){}
        public static function promptLogin(){
            $username = (string)readline("What is your username? ");
            $password = (string)readline("What is your password? ");
            $authenticationSystem = new AuthenticationSystem();
            $authenticationSystem->authenticate($username, $password);
        }
    }
    // Login::promptLogin();
?>
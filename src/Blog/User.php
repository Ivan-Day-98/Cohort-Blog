<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    class User{
        private $username;
        private $password;
        public function __construct($username, $password){
            $this->username = $username;
            $this->password = $password;
        }
    }
?>
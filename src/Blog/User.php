<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    class User{
        private $username;
        private $password;
        private $email;
        public function __construct($username, $password, $email){
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
        }
        public function saveToDatabase()
        {
            $database = fopen("../../database/users.txt", "a") or die ("unable to open file!");
            fwrite($database, $this->username . " " . $this->password . " " . $this->email);
            fclose($database);
        }
    }
?>
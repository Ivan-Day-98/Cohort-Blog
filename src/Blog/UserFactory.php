<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    class UserFactory 
    {
        public static function createUser($username, $password)
        {
            return new User($username, $password);
        }
    }
?>
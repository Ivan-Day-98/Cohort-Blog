<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    class RegistrationSystem 
    {
        private function __construct(){}
        public static function register()
        {
            $username = (string)readline("What is your username? ");
            $password = (string)readline("What is your password? ");
            $email = (string)readline("What is your email? ");
            $user = UserFactory::createUser($username, $password, $email);
            // $session = SessionManager::getInstance();
            // $session->setSessionData("username", $username);
            $user->saveToDatabase();
        }
    }
    //RegistrationSystem::register("Justin", "password", "justin.turkaly@koddi.com");
?>
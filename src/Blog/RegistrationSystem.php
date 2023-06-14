<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    class RegistrationSystem 
    {
        public function __construct(){}
        public function register()
        {
            $username = (string)readline("What is your username? ");
            $password = (string)readline("What is your password? ");
            $email = (string)readline("What is your email? ");
            $user = UserFactory::createUser($username, $password, $email);
            // $session = SessionManager::getInstance();
            // $session->setSessionData("username", $username);
            $this->saveToDatabase($user);
        }
        private function saveToDatabase($user)
        {
            $database = fopen("../../database/users.txt", "a") or die ("unable to open file!");
            $encryptedPass = $this->encryptPassword($user->getPassword());
            fwrite($database, $user->getUsername() . " " . $encryptedPass . " " . $user->getEmail() . "\n");
            fclose($database);
        }
        private function encryptPassword($password)
        {
            return password_hash($password, PASSWORD_DEFAULT);
        }
    }
    //RegistrationSystem::register("Justin", "password", "justin.turkaly@koddi.com");
?>
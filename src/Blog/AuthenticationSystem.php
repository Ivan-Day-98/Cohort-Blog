<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    class AuthenticationSystem
    {
        public function __construct(){}
        public function authenticate($username, $password)
        {
            $database = '../../database/users.txt';
            $contents = file($database);
            foreach($contents as $line)
            {
                $user = explode(" ", $line);
                if ($user[0] === $username and $user[1] === $password){
                    //allow user to see feed
                    $this->setCurrentUser($username);
                }
            }
        }
        private function setCurrentUser($username)
        {
            $activeUser = fopen('../../database/activeUser.txt', 'w');
            fwrite($activeUser, $username);
        }
    }
    // AuthenticationSystem::authenticate("Ivan", "test");
?>
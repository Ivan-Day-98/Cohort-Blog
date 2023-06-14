<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    class AuthenticationSystem
    {
        public function __construct(){}
        public static function authenticate($username, $password)
        {
            $database = '../../database/users.txt';
            $contents = file($database);
            foreach($contents as $line)
            {
                $user = explode(" ", $line);
                if ($user[0] === $username and $user[1] === $password){
                    //allow user to see feed
                    echo "logged in!";
                }
            }
        }
        private function setCurrentUser()
        {
            
        }
    }
    // AuthenticationSystem::authenticate("Ivan", "test");
?>
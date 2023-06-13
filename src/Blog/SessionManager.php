<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    class SessionManager
    {
        private static $instance;
        private function __construct(){
            session_start();
        }
        public static function getInstance()
        {
            if(self::$instance === null) 
            {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function setSessionData($key, $value) 
        {
            $_SESSION[$key] = $value;
        }

        public function getSessionData($key)
        {
            return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
        }

        public function removeSessionData($key)
        {
            unset($_SESSION[$key]);
        }
    }
?>
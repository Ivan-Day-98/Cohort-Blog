<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    class SessionManager
    {
        private static $instance;
        private function __construct(){}
        public static function getInstance()
        {
            if(self::$instance === null) 
            {
                self::$instance = new self();
            }
            return self::$instance;
        }
    }
?>
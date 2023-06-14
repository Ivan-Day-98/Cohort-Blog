<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    $userChoice = (string)readline("would you like to register or login? ");
    if ($userChoice === "login")
    {
        $login = new Login();
        $login->promptLogin();
    } 
    else if ($userChoice === "register")
    {
        $registrationSystem = new RegistrationSystem();
        $registrationSystem->register();
    }
?>
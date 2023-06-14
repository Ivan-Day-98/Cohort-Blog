<?php 
    namespace Blog;
    require '../../vendor/autoload.php';
    $userChoice = (string)readline("would you like to register or login? ");
    if ($userChoice === "login")
    {
        $login = new Login();
        if ($login->promptLogin())
        {
            //show user feed
        }
    } 
    else if ($userChoice === "register")
    {
        $registrationSystem = new RegistrationSystem();
        $registrationSystem->register();
    }
?>
<?php

if($_action=='login') {

    if( $_POST != null ) {
        $login = isset($_POST['name']) ? $_POST['name'] : null;
        $pass = isset($_POST['password']) ? $_POST['password'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;

        $uniqueUser = checkUniqueUser($pdo, $email, $login, $pass);

        if( count( $uniqueUser ) > 0 ) {

            $_SESSION['user_id'] = $uniqueUser[0]['id'];
            $_SESSION['user_name'] = $uniqueUser[0]['name'];
            $_SESSION['role'] = $uniqueUser[0]['role'];
            $_SESSION['flash_msg'] = "User <b>" . $uniqueUser[0]['name'] . "</b> logged in";
            header('location: /');
            exit();
        }
        else {
            $_SESSION['flash_msg'] = "User is not valid";
        }
    }
    view('login');

}


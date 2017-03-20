<?php

//echo __FILE__.' in progress'.'<br/>';



// Simple function to handle PDO prepared statements
function sql($db, $q, $params = [], $return = null) {
    // Prepare statement
    $stmt = $db->prepare($q);
    // Execute statement
    $res = $stmt->execute($params);
    // Decide whether to return the rows themselves, or query status
    if ($return == "rows") {
        return $stmt->fetchAll(); //rows
    }
    else {
        return $res; //boolean
    }
}


function email_check($email){
    //if (!preg_match("~^([a-z0-9_/-/.])+@([a-z0-9_/-/.])+/.([a-z0-9])+$~i", $email)) {
    if (!preg_match("/@/", $email)) {
        return 1;
    }
    else {
        return 0;
    }
}

//view redirection
function view($_View, $data = []){

    global $_config, $_page;

    include "templates/header.php";

    if (file_exists('templates/'.$_View.'View.php')){
        include 'templates/'.$_View.'View.php';
    }

    include "templates/footer.php";
}


function buy_product($id)
{
    $_SESSION['basket'][]= $id;
    $_SESSION['flash_msg'] = "Product added";
}
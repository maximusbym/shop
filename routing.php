<?php

//echo __FILE__.' in progress'.'<br/>';

$routs = [
    'login',
    'registration',
    'logout',
    'basket',
    'order',

    'catalog',
    'product',

    'admin'
];

$_action = $_subAction = $_id = null;

if( $_SERVER['REQUEST_URI'] != '/' ) {

    $url = parse_url($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
    $urlArray = explode('/', $url['path']);
    $urlArray = array_filter($urlArray);

    foreach ($urlArray as $key => $_url){
        if(isset($_url)) {
            if ($key == 1) {
                $_action = $_url;
            }
            else if ($key > 1) {
                if (is_numeric($_url) && $_id == null) {
                    $_id = $_url;
                } else {
                    $_subAction = $_url;
                }
            }
        }

//        var_dump($_url);
//        echo '<br/>';
    }


//    if(isset($urlArray[4])){
//        include_once 'controllers/404Controller.php';
//        exit();
//    }

    if( !in_array( $_action, $routs ) ) {
        $_action = null;
        $_subAction = null;
        header("HTTP/1.0 404 Not Found");
        include_once 'controllers/404Controller.php';
        exit();
    }

    if( $_action == 'admin' ) {
        $_method = $_GET['method'] ?? null;
        $_page = $_GET['page'] ?? 0;
    }

//    var_dump($urlArray);
//    echo '<hr>';
//    echo '$_action= '.$_action.'<br/>';
//    echo '$_subAction= '.$_subAction.'<br/>';
//    echo '$_id= '.$_id.'<br/>';
//
//    var_dump( $_GET );
//
//    echo '<hr>';
//    exit();

}
else{
    //include_once 'controllers/mainController.php';
    $_action='main';
}

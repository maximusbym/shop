<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>title</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<hr/>

<a href="/"><button>Main page</button></a>
<a href="/basket"><button>To cart</button></a>
<br/>
<hr/>

<?php

if(isset($_SESSION['flash_msg'])){
    echo $_SESSION['flash_msg'].'<br/>';
    unset($_SESSION['flash_msg']);
}

?>

<?php if( isset( $_SESSION['user_id'] ) ) { ?>
    <img src="/files/avatars/avatar_<?=$_SESSION['user_id']?>.jpg" style="max-width:100px;" alt="">
    <?=$_SESSION['user_name']?>  <a href="/logout">Logout</a>
<?php } else  { ?>
    <a href="/login">Login</a> | <a href="/registration">Registration</a>
<?php } ?>

<hr/>

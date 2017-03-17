<?php
function createUser($pdo, $name, $email, $password, $login){
    $insert = $pdo->prepare("INSERT INTO users(`name`,`role`,`email`,`password`,`login`) VALUES (?,?,?,?,?)");
    $res = $insert->execute(array($name,'customer',$email, $password, $login));
    return $res;
}
function checkUniqueUser($pdo,$email,$login,$pass){

    $user = sql($pdo,
        "SELECT * FROM `users` 
        WHERE (`login` = ? AND `password` = ?) 
        OR ( `email` = ? AND `password` = ?)",
        [$login, $pass, $email, $pass],
        'rows');

    return $user;
}
function authUser($pdo,$login){//,$password){
    $user = $pdo->query("SELECT * FROM `users` WHERE `login` = ?", $login);
                          // AND `password` = '{$password}'");
    $userCheck = $user->fetchAll();
    return $userCheck;
}
function getUserInfo($pdo, $id){
    $user = $pdo->query("SELECT * FROM `users` WHERE `id` = ?", $id);
    $userGet = $user->fetch();
    return $userGet;
}

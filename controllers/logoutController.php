<?php

unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
$_SESSION['flash_msg'] = "User  logged out";
header('location: /');
exit();
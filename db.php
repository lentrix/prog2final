<?php

$db_host = 'localhost';  //  hostname
$db_name = 'prog2final';  //  databasename
$db_user = 'prog2final';  //  username
$user_pw = 'finalpassword';  //  password

$con = new PDO('mysql:host='.$db_host.'; dbname='.$db_name, $db_user, $user_pw);  
$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$con->exec("SET CHARACTER SET utf8"); 
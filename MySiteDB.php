<?php
    $localhost ="127.0.0.1";
    $db = "MySiteDB";
    $user = "root";
    $password = "";
        $link = mysqli_connect($localhost, $user, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
            mysqli_query($link, "SET NAMES utf8;") or die(mysql_error());
            mysqli_query($link, "SET CHARACTER SET utf8;") or die(mysql_error());
            //Выбор базы данных на сервере localhost
            mysqli_select_db($link, $db);
?>

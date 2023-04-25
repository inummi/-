<?php
/**
Подключение к БД
**/

$dblocation = "localhost";
$dbname = "u1772615_myshop";
$dbuser = "u1772615_root";
$dbpasswd = "Andromeda5";

//Соединение с БД
$db = mysql_connect($dblocation, $dbuser, $dbpasswd);

if (! $db){
    echo "Ошибка доступа к MySql";
    exit();
}

//Кодировка по умолчанию
mysql_set_charset('UTF8');

if (!mysql_select_db($dbname, $db)){
    echo "Ошибка доступа к базе данных: {$dbname}";
    exit();
}
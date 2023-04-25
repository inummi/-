<?php

session_start();//Стартуем сессию

//Если в сессии нет массива корзины, то создаем его
if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

include_once '../config/config.php';            //Инициализация настроек
include_once '../config/db.php';                //Инициализация БД
include_once '../library/mainFunctions.php';    //Основные функции

    //Определяем с каким контроллером будем работать
$controllerName = isset ($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

    //Определяем с какой функцией будем работать

$actionName = isset ($_GET['action']) ? $_GET['action'] : 'Index';


//Если в сессии есть данные об авторизированном пользователе, то передаем их в шаблон
if (isset($_SESSION['user'])){
    $smarty->assign('arUser', $_SESSION['user']);
}


$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty, $controllerName, $actionName);
<?php
/**
Основные функции
**/

/**
Формирование запрашиваемой страницы
 *$controllerName - Название контроллера
 *$actionName - Название функции обработки страницы
**/

function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    $function($smarty);
}

/**
Загрузка шаблонов
**/

function loadTemplate($smarty, $templateName)
{
    $smarty->display($templateName . TemplatePostfix);
}

/**
Функция отладки
**/

function d ($value = null, $die = 1)
{
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    
    if($die) die;
}

/**
Преобразование результата работы функции выборки в ассоциативный массив
 * 
**/

function createSmartyRsArray ($rs){
    if (! $rs) return false;
    
    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){
        $smartyRs[] = $row;
    }
    return $smartyRs;
}

/**
Редирект 
**/
function redirect($url)
{
    if(! $url) $url = '/';
    header("Location: ($url)");
    exit;
}
<?php
/**
Контроллер главной страницы
**/
 
//Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function testAction(){
        echo 'IndexController.php > testAction';
}

/**
Формирование главной страницы сайта
**/

function indexAction($smarty){
    
    $rsCategories = getAllMainCatswithChildren();
    $rsProducts = getLastProducts(10);
       
    $smarty->assign('pageTitle', 'Главная страница сайта');
    
    $smarty->assign('rsCategories', $rsCategories);
    
    $smarty->assign('rsProducts', $rsProducts);
    
       
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
   
}
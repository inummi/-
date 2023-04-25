<?php
/**
Контроллер страницы категории (/category/1)
**/

//Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
Формирование страницы категории
**/

function indexAction($smarty){
    $catId = isset ($_GET ['id']) ? $_GET['id'] : null;
    if ($catId == null) exit();
    $rsProducts = null;
    $rsChildCats = null;
    
    $rsCategory = getCatById($catId);
    
    //Если главная страниця категория то показываем дочерние категории,
    //Иначе показываем това
    if ($rsCategory['parent_id'] == 0){
        $rsChildCats = getChildrenForcat($catId);
       }
    else{
        $rsProducts = getProductsByCat($catId);
    }
    $rsCategories = getAllMainCatswithChildren();
    
    $smarty->assign('pageTitle', 'Товары категории ' . $rsCategory['name']);
    
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);
    
    $smarty->assign('rsCategories', $rsCategories);
    
    loadTemplate($smarty, 'header');
    
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
    
}
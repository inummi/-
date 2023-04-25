<?php
/**
Контроллер работы с корзиной
**/

//Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';


/**
Добавление продукта в корзину
**/

function addtocartAction(){
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if(! $itemId) return false;
    
    $resData = array();
    
    //Если значение не найдено то добавляем
    if(isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false){
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    }
    else{
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}


/**
Удаление продукта в корзину
**/
function removefromcartAction(){
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if(! $itemId) exit();
    
    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if($key !== false){
        unset ($_SESSION['cart'] [$key]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']);     
    }
    else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}

/**
Формирование страницы корзины
**/

function indexAction($smarty){
    $itemIds = isset ($_SESSION['cart']) ? $_SESSION['cart'] : array();
    
    $rsCategroies = getAllMainCatswithChildren();
    $rsProducts = getProductFromArray($itemIds);
    
    $smarty->assign('pageTitle', 'Корзина');
    $smarty->assign('rsCategories', $rsCategroies);
    $smarty->assign('rsProducts', $rsProducts);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'cart');
    loadTemplate($smarty, 'footer');
}

/**
 * Формирование страницы заказа
 */
function orderAction($smarty){
    //получаем массив идентификаторо (id) продуктов корзины
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
    //если корзина пуста то редирект в корзину
    if (! $itemsIds){
        redirect('/cart/');
        return;
    }
    
    //получаем из массива $_POST количество покупаемых товаров
    $itemsCnt = array();
    foreach ($itemsIds as $item){
        //формирование ключа массива POST
        $postVar = 'itemCnt_'. $item;
        //создаем элемент массива количества покупаемного товара
        //ключ массива - id товара, значение массива - количество товара
        //например, $itemCnt[1] = 3; товар с id = 1 покупают 3 штуки
        $itemsCnt[$item] = isset($_POST[$postVar]) ? $_POST[$postVar] : null;
    }
    
    //получаем список продукто по массиву корзины
    $rsProducts = getProductFromArray($itemsIds);
    
    //добавляем каждому продукту доп. поле
    //"realPrice" = количество продуктов*цена продукта
    
    //"cnt" = количество покупаемых товаров
    
    //&$item - для того чтобы при изменении переменно $item
    //менялся и элемент массива $rsProducts
    $i = 0;
    foreach ($rsProducts as &$item){
        $item['cnt'] = isset($itemsCnt[$item['id']]) ? $itemsCnt[$item['id']] : 0;
        if ($item['cnt']){
            $item['realPrice'] = $item['cnt'] * $item['price'];
            
        }
        
        else{
            //если вдруг получилось так что товар в корзине есть, а количество = 0,
            //то удаляем товар
            unset ($rsProducts[$i]);
        }
    
        
        $i++;
    }
    
    
    
    
    
    if (! $rsProducts){
        echo "Корзина пуста";
        return;
    }
    
    // полученный массив покупаемых товаров помещен в сессионную переменнюу
    $_SESSION['saleCart'] = $rsProducts;
    
    $rsCategories = getAllMainCatswithChildren();

    //hideLoginBox переменная - флаг для того чтобы спрятать блоки логина и регистрации
    if (!isset($_SESSION['user'])){
        $smarty->assign('hideLoginBox', 1);
    }
    
    $smarty->assign('pageTitle','Заказ');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts',$rsProducts);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'order');
    loadTemplate($smarty, 'footer');
    
}
/**
 * 
 * @param array $_SESSION['saleCart'] массив покупаемых продуктов
 * @return json информация о результате выполнения
 */
function saveOrderAction(){
     // получаем массив покупаемых товаров
	$cart = isset($_SESSION['saleCart']) ? $_SESSION['saleCart'] : null;
	// если корзина пуста, то формируем ответ с ошибкой, отдаем его в формате 
	// json и выходим из функции 
	if(! $cart){
		$resData['success'] = 0; 
        $resData['message'] = 'Нет товаров для заказа'; 
		echo json_encode($resData);
		return;
	}
	
	$name	= $_POST['name'];
	$phone	= $_POST['phone'];
	$adress = $_POST['adress'];
	
	// создаем новый заказ и получаем его ID
	$orderId = makeNewOrder($name, $phone, $adress);
        // если заказ не создан, то выдаем ошибку и завершаем функцию
        if (! $orderId){
            $resData['success'] = 0;
            $resData['message'] = 'Ошибка создания заказа';
            echo json_encode($resData);
            return;
        }
        
        //Сохраняем товары для созданного заказа
        $res = setPurchaseForOrder($orderId, $cart);
        
        //если успешно, то формирует ответ, удаляем переменные корзины
        if($res){
            $resData['success'] = 1;
            $resData['message'] = 'Заказ сохранен';
            unset($_SESSION['caleCart']);
            unset($_SESSION['cart']);
        }
        else{
            $resData['success'] = 0;
            $resData['message'] = 'Ошибка внесения данных для заказа №' . $orderId;
        }
        echo json_encode($resData);
}

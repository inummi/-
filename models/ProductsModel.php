<?php
/**
Модель для таблицы продукции (products)
**/

/**
Последние добавленные товары
**/

function getLastProducts($limit = null)
{
    $sql = "SELECT *
            FROM `products` 
            ORDER BY id DESC";
    if($limit){
        $sql .= " LIMIT {$limit}";
    }
   
    $rs = mysql_query($sql); 
   
   return createSmartyRsArray($rs); 
}

function getProductsByCat($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT * FROM products WHERE category_id = '{$itemId}'";
    
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

/**
Получить данные продукта по ID
**/

function getProductById($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT * FROM products WHERE id = '{$itemId}'";
               
    $rs = mysql_query($sql);
    return mysql_fetch_assoc($rs);
}

/**
 * Получить список продуктов из массива идентификаторов (id)
 * @param array $itemIds массив идентификаторов продуктов
 * @return array массив данных продуктов
 * **/
function getProductFromArray($itemIds){
    $srtIds = implode($itemIds, ', ');
    $sql = "SELECT * FROM products WHERE id in({$srtIds})";
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
}

function getProducts()
{
    $sql = "SELECT * FROM `products` ORDER BY category_id";
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat)
{
    $sql = "INSERT INTO products SET `name` = '{$itemName}', `price` = '{$itemPrice}', `description` = '{$itemDesc}', `category_id` = '{$itemCat}'";
    $rs = mysql_query($sql);
    return $rs;
}

function updateProduct($itemId, $itemName, $itemPrice, $itemStatus, $itemDesc, $itemCat, $newFileName = null)
{
    $set = array();
    if ($itemName)
    {
        $set[] = "`name` = '{$itemName}'";
    }
    if ($itemPrice > 0)
    {
        $set[] = "`price` = '{$itemPrice}'";
    }
        if ($itemStatus !== null)
    {
        $set[] = "`status` = '{$itemStatus}'";
    }
       if ($itemDesc)
    {
        $set[] = "`description` = '{$itemDesc}'";
    }
       if ($itemCat)
    {
        $set[] = "`category_id` = '{$itemCat}'";
    }
      if ($newFileName)
    {
        $set[] = "`image` = '{$newFileName}'";
    }
    $setStr = implode($set, ", ");
    $sql = "UPDATE products SET {$setStr} WHERE id = '{$itemId}'";
    $rs = mysql_query($sql);
    return $rs;
    
}

function updateProductImage($itemId, $newFileName)
{
    $rs = updateProduct($itemId, null, null, null, null, null, $newFileName);
    return rs;
}
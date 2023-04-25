<?php
/**
Модель для таблицы категори (categories)
**/

/**
Получить дочерние категории для категории $catId
**/

function getChildrenForcat($catId){
   $sql = "SELECT * FROM categories WHERE parent_id = ($catId)";
   $rs = mysql_query($sql);
   
   return createSmartyRsArray($rs);
}

/**
Получить главные категории с привязками дочерних
**/
function getAllMainCatswithChildren(){
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';
    $rs = mysql_query($sql);
    
    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){
        $rsChildren = getChildrenForcat($row['id']);
            if ($rsChildren){
                $row['children'] = $rsChildren;
            }        
        $smartyRs[] = $row;
    }
    return $smartyRs;  
}

/**
Получить данные категории по id
**/

function getCatById($catId){
    $catId = intval($catId); //Защита от SQL инъекции, преобразует данные в integer
    $sql = "SELECT * FROM categories WHERE id = '{$catId}'";
    
    $rs = mysql_query($sql);
    return mysql_fetch_assoc($rs);
}


/**
 * Получить все главные категории (не являются дочерними)
 * 
 * @return array массив категорий
 */
function getAllMainCategories()
{
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

/**
 * Добавление новой категории
 * @param string $catName Название категории
 * @param integer $catParentId id родительской категории
 * @return integer id новой категории
 */
function insertCat($catName, $catParentId = 0)
{
    $sql= "INSERT INTO categories (`parent_id`, `name`) VALUES ('{$catParentId}', '{$catName}')";
  
    mysql_query($sql);
    //получаем id добавленной записи
    $id = mysql_insert_id();
    return $id;
}

/**
 * Получить все категории
 * 
 * @return array массив категорий
 */
function getAllCategories()
{
    $sql = 'SELECT * FROM categories ORDER BY parent_id ASC';
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

/**
 * Обновление категории
 * 
 * @param integer $itemId id категории
 * @param integer $parentId id главной категории
 * @param string $newName новое имя категории
 * 
 * @return type
 */
function updateCategoryData($itemId, $parentId = -1, $newName = '')
{
    $set = array();
    if($newName)
    {
        $set[] = "`name` = '{$newName}'";
    }
    if($parentId > -1)
    {
        $set[] = "`parent_id` = '{$parentId}'";
    }
    $setStr = implode($set, ", "); // превращаем массив в строку
    $sql = "UPDATE categories 
            SET {$setStr}
            WHERE id = '{$itemId}'";
    $rs = mysql_query($sql);
    return $rs;
}
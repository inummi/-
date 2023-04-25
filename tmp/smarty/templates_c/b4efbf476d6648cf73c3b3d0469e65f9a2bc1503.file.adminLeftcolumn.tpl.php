<?php /* Smarty version Smarty-3.1.6, created on 2022-11-18 02:42:54
         compiled from "../views/admin/adminLeftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15710412826376c6fe4d9eb8-03612037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4efbf476d6648cf73c3b3d0469e65f9a2bc1503' => 
    array (
      0 => '../views/admin/adminLeftcolumn.tpl',
      1 => 1653495396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15710412826376c6fe4d9eb8-03612037',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6376c6fe4e270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6376c6fe4e270')) {function content_6376c6fe4e270($_smarty_tpl) {?>

<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        <a href="/admin/">Главная</a><br />
        <a href="/admin/category/">Категории</a><br />
        <a href="/admin/products/">Товар</a><br />
        <a href="/admin/orders/">Заказы</a>
    </div>
</div>
<?php }} ?>
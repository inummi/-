<?php /* Smarty version Smarty-3.1.6, created on 2022-05-25 13:17:51
         compiled from "../views/admin\adminLeftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6737628dccb9ec2961-99372628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acec6194b13479678294930a7c057116aedb8b86' => 
    array (
      0 => '../views/admin\\adminLeftcolumn.tpl',
      1 => 1653477394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6737628dccb9ec2961-99372628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_628dccb9ec45c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628dccb9ec45c')) {function content_628dccb9ec45c($_smarty_tpl) {?>

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
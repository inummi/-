<?php /* Smarty version Smarty-3.1.6, created on 2022-05-31 10:58:08
         compiled from "../views/default\rightcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274126295d818401357-58713555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77f8613f27eca3c909cad1ca6771c2c029f7480' => 
    array (
      0 => '../views/default\\rightcolumn.tpl',
      1 => 1653987471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274126295d818401357-58713555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6295d81841a7f',
  'variables' => 
  array (
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295d81841a7f')) {function content_6295d81841a7f($_smarty_tpl) {?>

<div id="rightcolumn">
    <a href="/cart/" title="Перейти в корзину" style="color:#ca9500;">
                <div class="menuCaption"><img src="/images/cart.png" width="60px" /></div>
                <h3>В корзине</a>
            <span id="cartCntItems" style="color:#ca9500;">
                <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?>пусто<?php }?>
            </span>
</div>
<?php }} ?>
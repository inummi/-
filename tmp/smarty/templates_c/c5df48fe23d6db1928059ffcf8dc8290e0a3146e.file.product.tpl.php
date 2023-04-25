<?php /* Smarty version Smarty-3.1.6, created on 2022-06-01 08:59:34
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1511062721df5813af1-79224853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1654066772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1511062721df5813af1-79224853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_62721df5860cc',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62721df5860cc')) {function content_62721df5860cc($_smarty_tpl) {?>
<div>
<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>


<img width="540" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" style="float:left">
<br />
 <h3>Описание</h3>
<p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
</div>

<h4>Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 ₽ </h4>
<br />
<a style="color:red" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
);
   return false;" alt="Удалить из корзины"> Удалить из корзины </a>

<a style="color:#008000" id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
);
   return false;" alt="Добавить в корзину"> Добавить в корзину </a>

<?php }} ?>
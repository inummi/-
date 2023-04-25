<?php /* Smarty version Smarty-3.1.6, created on 2022-11-18 02:36:39
         compiled from "../views/default/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20616006946376c587412ab3-13777007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03be405d95652b2f22cc0b288652122179328d0' => 
    array (
      0 => '../views/default/product.tpl',
      1 => 1654084774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20616006946376c587412ab3-13777007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6376c58744fcf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6376c58744fcf')) {function content_6376c58744fcf($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.6, created on 2023-04-24 16:19:20
         compiled from "../views/main/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2164410116446391add1d28-01896396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b13a1fba6f1164862ddc662f0f38e264027ca4b' => 
    array (
      0 => '../views/main/product.tpl',
      1 => 1682342319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2164410116446391add1d28-01896396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6446391add2a4',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6446391add2a4')) {function content_6446391add2a4($_smarty_tpl) {?>
<section>
<div class="container">
    <div class="row mt-5">
         <div class="col-xl-6 col-md-6 col-sm-12 mt-3">
            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" style="float:left height: auto;
  max-width: 100%;">
         </div>
         <div class="col-xl-6 col-md-6 col-sm-12">
            <h3>Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 ₽ </h3>
            
            <a style="color:red" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
);
            return false;" alt="Удалить из корзины"> <button type="button" class="btn btn-danger">Удалить из корзины</button> </a>

            <a style="color:#008000" id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
);
            return false;" alt="Добавить в корзину"><button type="button" class="btn btn-success">Добавить в корзину</button> </a>
            
            <h4 class="mt-2">Описание</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
        
         
    </div>
    </div>
</section><?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2023-04-25 11:09:11
         compiled from "../views/main/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13685322426445392e1843c8-44359374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8c6813dae1827dab5b53eb1afbb2cb26eea823' => 
    array (
      0 => '../views/main/cart.tpl',
      1 => 1682409893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13685322426445392e1843c8-44359374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6445392e184d6',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6445392e184d6')) {function content_6445392e184d6($_smarty_tpl) {?>

<section class="cart">
   <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Корзина</h2>
                <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
                В корзине пусто.
                <?php }else{ ?>
                <form action="/cart/order/" method="POST">
                <h2>Данные заказа</h2>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
                    Товар: <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
<br>
                    <a style="color:black;"href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
                    <input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
                    Цена за ед:
                    <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span><br>
                    Стоимость:
                    <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span><br>
                    <a style="color:red;" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Удалить из корзины"><button type="button" class="btn btn-danger">Удалить из корзины</button></a>
	                <a style="color:#008000;" id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Восстановить элемент"><button type="button" class="btn btn-success">Восстановить</button></a>
                    <hr>
                <?php } ?>
                
                <button type="submit" class="btn btn-primary" value="Оформить заказ">Оформить заказ</button>
                </form>	  
   
                <?php }?>
            </div>
        </div>
   </div>
</section>
<?php }} ?>
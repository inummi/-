<?php /* Smarty version Smarty-3.1.6, created on 2022-06-01 08:54:29
         compiled from "../views/default\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85546274c62f6029e8-73012546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba49ac498b8cf2b9e90bf9a7a8f97ee29f5cd8d0' => 
    array (
      0 => '../views/default\\cart.tpl',
      1 => 1654066467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85546274c62f6029e8-73012546',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6274c62f91e05',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6274c62f91e05')) {function content_6274c62f91e05($_smarty_tpl) {?>

<h2>Корзина</h2>
<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
В корзине пусто.

<?php }else{ ?>
<form action="/cart/order/" method="POST">
    <h2>Данные заказа</h2>
<table>
    <tr>
        <td>
            №
        </td>
        <td>
            Наименование
        </td>
        <td>
            Количество
        </td>
         <td>
            Цена за единицу
        </td>
         <td>
            Цена
        </td>
         <td>
            Действие
        </td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
     <tr>
        <td>
            <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>

        </td>
        
        <td>
            <a style="color:black;"href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
        </td>
        
        <td>
            <input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
        </td>
        
         <td>
             <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                 <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

             </span>
        </td>
        
         <td>
             <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                 <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

             </span>
        </td>
        
         <td>
             <a style="color:red;" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Удалить из корзины">Удалить</a>
	     <a style="color:#008000;" id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Восстановить элемент">Восстановить</a>
        </td>
        
     </tr>
    <?php } ?>
</table>

<input type="submit" value="Оформить заказ"/>    
</form>	  
   
<?php }?><?php }} ?>
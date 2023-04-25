<?php /* Smarty version Smarty-3.1.6, created on 2023-04-25 11:08:15
         compiled from "../views/main/order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94206858564465d46d84341-30452481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6958039742411155cdcf440c4fdee650c12469b8' => 
    array (
      0 => '../views/main/order.tpl',
      1 => 1682410092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94206858564465d46d84341-30452481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_64465d46d84d0',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'arUser' => 0,
    'buttonClass' => 0,
    'name' => 0,
    'phone' => 0,
    'adress' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64465d46d84d0')) {function content_64465d46d84d0($_smarty_tpl) {?>
<section>
    <div class="container"
        <div class="row">
            <div class="col-12 mt-3">
                <h2>Данные заказа</h2>
                <form id="frmOrder" action="/cart/caveorder/" method="POST">
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
                        <hr
                <?php } ?>
                
                    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
        <?php $_smarty_tpl->tpl_vars['buttonClass'] = new Smarty_variable('', null, 0);?>
        <h2> Данные заказчика </h2>
        <div id="orderUserInfoBox" <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
>
            <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['name'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['phone'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['adress'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['adress'], null, 0);?>
            <table>
                <tr>
                    <td>Имя*</td>
                    <td><input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /></td>
                </tr>
                <tr>
                    <td>Тел*</td>
                    <td><input type="text" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" /></td>
                </tr>
                <tr>
                    <td>Адрес*</td>
                    <td><textarea id="adress" name="adress" /><?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
</textarea></td>
                </tr>
            </table>
        </div>
    
    <?php }else{ ?>
        <div id="loginBox">
		<div class="menuCaption">Авторизация</div>
			<table>
			<tr>
				<td>Логин</td>
				<td><input type="text" id="loginEmail" name="loginEmail" value=""/></td>
			</tr>
			<tr>
				<td>Пароль</td>
				<td><input type="password" id="loginPwd" name="loginPwd" value=""/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" onclick="login();" value="Войти"/></td>
			</tr>
			</table> 
	</div> 
	
	<div id="registerBox">или <br />
            <div class="menuCaption">Регистрация нового пользователя:</div>
            email* :<br />
            <input type="text" id="email" name="email" value=""/><br />
            пароль* : <br />
            <input type="password" id="pwd1" name="pwd1" value=""/><br />
            повторить пароль* :<br />
            <input type="password" id="pwd2" name="pwd2" value=""/><br />

            Имя* :<br />
            <input type="text" id="name" name="name" value="" /><br />
            Тел* :<br />
            <input type="text" id="phone" name="phone" value="" /><br />
            Адрес* :<br />
            <textarea  id="adress" name="adress" /></textarea><br />

            <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
        </div>
	<?php $_smarty_tpl->tpl_vars['buttonClass'] = new Smarty_variable("class='hideme'", null, 0);?>
        
    <?php }?>
                <input <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
 id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();"/>
                
                </form>
            </div>
        </div>
    </div>
</section><?php }} ?>
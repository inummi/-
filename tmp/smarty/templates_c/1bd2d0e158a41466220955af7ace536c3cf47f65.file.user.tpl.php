<?php /* Smarty version Smarty-3.1.6, created on 2023-04-25 13:14:57
         compiled from "../views/main/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19833895836447a1d08c9787-93137838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd2d0e158a41466220955af7ace536c3cf47f65' => 
    array (
      0 => '../views/main/user.tpl',
      1 => 1682417690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19833895836447a1d08c9787-93137838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6447a1d08ca1f',
  'variables' => 
  array (
    'arUser' => 0,
    'rsUserOrders' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6447a1d08ca1f')) {function content_6447a1d08ca1f($_smarty_tpl) {?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
            
                <h2>Ваши регистрационные данные:</h2>
                <table border="0">
                       <tr>
                           <td>Логин (email)</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
                       </tr>
                       <tr>
                           <td>Имя</td>
                           <td><input type]="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
" /></td>
                       </tr>
                       <tr>
                           <td>Телефон</td>
                           <td><input type]="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
" /></td>
                       </tr>
                       <tr>
                           <td>Адрес</td>
                           <td><textarea id="newAdress" /><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea></td>
                       </tr>
                       <tr>
                           <td>Новый пароль</td>
                           <td><input type]="password" id="newPwd1" value="" /></td>
                       </tr>
                       <tr>
                           <td>Повтор пароля</td>
                           <td><input type]="password" id="newPwd2" value="" /></td>
                       </tr>
                       <tr>
                           <td>Для сохранения новых данных введите текущий пароль</td>
                           <td><input type]="password" id="curPwd" value="" /></td>
                       </tr>
                       <tr>
                           <td>&nbsp:</td>
                           <td><input type="button"  value="Сохранить изменения" onclick="updateUserData();"/></td>
                       </tr>
                </table>
                 
                <h2>Заказы:</h2>
                <?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value){?>
                    Нет заказов
                <?php }else{ ?>
                    <table border="1" cellpadding="1" cellspacing="1">
                        <tr>
                            <th>№</th>
                            <th>Действие</th>
                            <th>ID заказа</th>
                            <th>Статус</th>
                            <th>Дата создания</th>
                            <th>Дата оплаты</th>
                            <th>Дополнительная информация</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsUserOrders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['orders']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['orders']['iteration']++;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['orders']['iteration'];?>
</td>
                                <td><a style="color:#008000" href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false;" >Показать товар заказа</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
&nbsp;</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
                            </tr>
                			
                            <tr class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
                                <td colspan="7">
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['children']){?>
                                    <table border="1" cellpadding="1" cellspacing="1" width="100%">
                                        <tr>
                                            <th>№</th>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th>Цена</th>
                                            <th>Количество</th>
                                        </tr>
                					<?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
                						<tr>
                							<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
                							<td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
</td>
                							<td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></td>
                							<td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
                							<td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</td>
                						</tr>
                					<?php } ?>
                                </table>
                                <?php }?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                <?php }?>		            
            
            
            </div>
        </div>
    </div>
</section><?php }} ?>
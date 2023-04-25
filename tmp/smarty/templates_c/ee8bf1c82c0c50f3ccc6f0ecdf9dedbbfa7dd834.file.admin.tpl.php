<?php /* Smarty version Smarty-3.1.6, created on 2022-05-25 09:06:32
         compiled from "../views/admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4790628dccb9f1a152-90430166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8bf1c82c0c50f3ccc6f0ecdf9dedbbfa7dd834' => 
    array (
      0 => '../views/admin\\admin.tpl',
      1 => 1653462389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4790628dccb9f1a152-90430166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_628dccb9f1bb0',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628dccb9f1bb0')) {function content_628dccb9f1bb0($_smarty_tpl) {?><div id="blockNewCategory">
    Новая категория:
    <input name="newCategoryName" id="newCategoryName" type="text" value="" />
    <br />    
    Является подкатегорией для
    <select name="generalCatId">
        <option value="0">Главная категория
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

            <?php } ?>
    </select>  
    <br />
    <input type="button" onclick="newCategory();" value="Добавить категорию" />
</div>
<?php }} ?>
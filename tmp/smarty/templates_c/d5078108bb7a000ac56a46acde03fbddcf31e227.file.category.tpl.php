<?php /* Smarty version Smarty-3.1.6, created on 2022-11-18 02:42:00
         compiled from "../views/default/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10169229666376c6c87ed6a1-68149272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5078108bb7a000ac56a46acde03fbddcf31e227' => 
    array (
      0 => '../views/default/category.tpl',
      1 => 1654085284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10169229666376c6c87ed6a1-68149272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'rsChildCats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6376c6c888098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6376c6c888098')) {function content_6376c6c888098($_smarty_tpl) {?>
<h2>Товары категории <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h2>
 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
     <div style="float: left; padding: 0px 30px 40px 0px; width: 150px; height: 170px;">
             <a href = "/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                 <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="150" />
                 </a><br />
                 <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" style="color: black;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%3==0){?>
                     <div style="clear:both;"></div>
                 <?php }?>
    </div>
     
<?php } ?>
    
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsChildCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <h2><a style="color:#8B4513;" href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
        
    <?php } ?>
    <?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2022-11-18 02:36:35
         compiled from "../views/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12131696216376c5839a17a0-69405044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1febcd04b5db3f3dad3a541e467b066e67da6d4d' => 
    array (
      0 => '../views/default/index.tpl',
      1 => 1654003714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12131696216376c5839a17a0-69405044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6376c5839cd7b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6376c5839cd7b')) {function content_6376c5839cd7b($_smarty_tpl) {?>
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




<?php }} ?>
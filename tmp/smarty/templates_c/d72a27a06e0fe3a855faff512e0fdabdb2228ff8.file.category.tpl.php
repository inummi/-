<?php /* Smarty version Smarty-3.1.6, created on 2023-04-24 16:26:53
         compiled from "../views/main/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1253231003642d0c1861e847-46245909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd72a27a06e0fe3a855faff512e0fdabdb2228ff8' => 
    array (
      0 => '../views/main/category.tpl',
      1 => 1682342809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253231003642d0c1861e847-46245909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_642d0c1861f61',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_642d0c1861f61')) {function content_642d0c1861f61($_smarty_tpl) {?><section class="category mt-3" >
    <div class="container">
        <div class="row col-12">
            <div class="col-12 text-center">
                <h2><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h2>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <div class="categoryItem ">
                        <a href = "/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="200" />
                        </a><br />
                        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" style="color: black;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section><?php }} ?>
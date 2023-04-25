<?php /* Smarty version Smarty-3.1.6, created on 2023-04-24 16:16:00
         compiled from "../views/main/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:792625599642ab94185ea30-93713493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4011c11e8f2643fbfd99cbcc5ae0fe69f4a52b67' => 
    array (
      0 => '../views/main/index.tpl',
      1 => 1682342132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '792625599642ab94185ea30-93713493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_642ab94185f26',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_642ab94185f26')) {function content_642ab94185f26($_smarty_tpl) {?>
<section>
    <div class="container">  
            <div class="row">
                <div class=" text-center">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <div class="productsOnMain col-xl-4 col-md-6 col-sm-12">
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
    <div>
</section><?php }} ?>
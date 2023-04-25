<?php /* Smarty version Smarty-3.1.6, created on 2023-04-25 11:17:58
         compiled from "../views/main/leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291886791642ab94185aa47-81047427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff6182c5a459d51a7b4a7123dad410f4c677dab' => 
    array (
      0 => '../views/main/leftcolumn.tpl',
      1 => 1682410677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291886791642ab94185aa47-81047427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_642ab94185b4c',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_642ab94185b4c')) {function content_642ab94185b4c($_smarty_tpl) {?> <section>
    <div class="container">
         <div class="row col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Категории:</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                             </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                              <ul class="navbar-nav">
                                
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
                                            <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                                                <li class="nav-item"> 
                                                <a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
                                      
                                                </li>
                                            <?php } ?>
                                        <?php }?>
                                    <?php } ?>
                              </ul>
                            </div>
                        </div>
                    </nav>

                    
                    
                    
                </div>
                </div>
               </section><?php }} ?>
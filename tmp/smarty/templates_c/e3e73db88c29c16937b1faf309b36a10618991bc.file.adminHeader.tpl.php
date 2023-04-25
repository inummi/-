<?php /* Smarty version Smarty-3.1.6, created on 2022-11-18 02:42:54
         compiled from "../views/admin/adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8207350026376c6fe4b6480-67468122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3e73db88c29c16937b1faf309b36a10618991bc' => 
    array (
      0 => '../views/admin/adminHeader.tpl',
      1 => 1653484618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8207350026376c6fe4b6480-67468122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6376c6fe4d714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6376c6fe4d714')) {function content_6376c6fe4d714($_smarty_tpl) {?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
        <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/main.js"></script>
        
    </head>
    <body>
        <div id="header">
            <h1>Управление сайтом</h1>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div id "centerColumn">
<?php }} ?>
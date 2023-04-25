<?php /* Smarty version 3.1.24, created on 2022-04-17 09:46:41
         compiled from "../views/default/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1755172565625bc5e112c009_45556889%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cef39c8bee59de218ea091578e53af3b15f07e9' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1650181598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1755172565625bc5e112c009_45556889',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_625bc5e115b314_21724474',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_625bc5e115b314_21724474')) {
function content_625bc5e115b314_21724474 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1755172565625bc5e112c009_45556889';
?>
<html> 
    <head>
            <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <div id="header">
                <h1> my shop - интернет магазин </h1>
            </div> 
        
        
        
            
        
        <div id="centerColumn">
           Центр 
        </div><?php }
}
?>
<?php /* Smarty version Smarty-3.1.6, created on 2023-04-03 12:07:01
         compiled from "../views/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15338942646376c5838afba3-98264073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbdba5b3e744fb99042215648705161ce6110d6' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1680512797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15338942646376c5838afba3-98264073',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6376c58393562',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6376c58393562')) {function content_6376c58393562($_smarty_tpl) {?><html> 
    <head>
            <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet"> 
            
            
            
            <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
            <script type="text/javascript" src="/js/main.js"></script>
            <meta charset="UTF-8">
            
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
           
            
            
            
        </head>
        
        
        <body>
            <div id="container">
                <div id="header">
                    <span id="logo">
                        <a href="/">
                            <img src="/images/logo.png" width="150" />
                        </a>
                    </span>
                    <span id="logotitle">
                        <a href="/">
                            <h1>Берестяной дом</h1>
                        </a>
                    </span>
                    <span id="headermenu">
                        <p style="padding-left: 180px;">+7(924)600-70-95<br /></p>
                    </span>
                    <span id="social">
                            <a href="#" title="" style="">
                                <img src="/images/social/vk.png" width="30" />
                            </a>
                            <a href="#" title="" style="">
                                <img src="/images/social/Instagram.png" width="30" />
                            </a>
                            <a href="#" title="" style="">
                                <img src="/images/social/Telegram.png" width="30" />
                            </a>
                    </span>
                    <span id="cart"> 
                        <a href="/cart/" title="Перейти в корзину" style="color:#ca9500; font-size: 1.15rem;">
                            <div class="menuCaption"><img src="/images/cart.png" width="45px" /></div>
                        В корзине</a>
                        <span id="cartCntItems" style="color:#ca9500;">
                            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?>пусто<?php }?>
                        </span>
                    </span>
                    
                    
                    
                    
                    
                    
                </div> 
        
        
        <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            
       <?php }} ?>
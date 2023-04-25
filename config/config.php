<?php
/**
Файл настроек
**/

//Констранты для обращения к контроллерам
define ('PathPrefix', '../controllers/');
define ('PathPostfix', 'Controller.php');

//>Используемый шаблон
$template1 ='default';
$template ='main';
$templateAdmin ='admin';
 
//Пути к файлам шаблонов (*.tpl) (template prefix)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define ('TemplatePostfix', '.tpl');

//Пути к файлам наблонов в вебпространстве (www)
define ('TemplateWebPath', "/templates/{$template}/");
define ('TemplateAdminWebPath', "/templates/{$templateAdmin}/");
//<

//>Инициализация шаблонизатора Smarty
//put full path to Smarty.class.php
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty(); //Экземпляр объекта Смарти

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/lexer');

$smarty->assign('templateWebPath',TemplateWebPath);
//<
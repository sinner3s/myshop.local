<?php

// Константы для обращение к контроллерам
define ('PathPrefix', '../controllers/');
define ('PathPostfix', 'Controller.php');

// используемый шаблон

$template = 'default';

// пути к файлам шаблонов
define ('TemlatePrefix', "../views/{$template}/");
define ('TemplatePostfix', '.tpl');

// пути к файлам шаблонов в папке www
define ('TemplateWebPath', "/templates/{$template}/");

// Инициализация шаблонизатора Smarty
// full path to Smarty.class.php
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemlatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);


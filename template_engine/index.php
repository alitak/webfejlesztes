<?php

include('smarty/Smarty.class.php');

$smarty = new Smarty();

$smarty->assign('name', 'Attila');
$smarty->display('templates/index.tpl');
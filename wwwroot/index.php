<?php
require_once( __DIR__ . '/init.php');

//template��display����
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/index.tpl');
?>

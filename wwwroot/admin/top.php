<?php

require_once( __DIR__ . '/../init.php');
//var_dump(( __DIR__ . '/../init.php'));
//





//テンプレート設定
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/top.tpl');
<?php
// admin/index.php
require_once( __DIR__ . '/../init.php');
// �e���v���[�g���w�肵�ďo��
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/index.tpl');
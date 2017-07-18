<?php

require_once( __DIR__ . '/init.php');
//
//ob_start();
//session_start();

//check
//var_dump($_SESSION);

//入力内を。。
//$input = $_SESSION['buffer']['input'];
if (true === isset($_SESSION['buffer']['input'])) {
    $input = $_SESSION['buffer']['input'];
}else {
     //input =[];
    $input = array();
}
// error
//$error_detail = $_SESSION['buffer']['error_detail'];
if (true === isset($_SESSION['buffer']['error_detail'])) {
    $error_detail = $_SESSION['buffer']['error_detail'];
}else{
    $error_detail = array();
}
//var_dump($error_detail);


unset($_SESSION['buffer']);

//CSRF token creating
//XXX PHP7前
$csrf_token = hash('sha512',random_bytes(128));
//var_dump($csrf_token);

// CSRF token while reloading 10 times
while (10 <= count(@$_SESSION['cref_token'])) {
	array_shift($_SESSION['cref_token']);
}

//csrf token inserting to SESSION:with time
$_SESSION['csrf_token'][$csrf_token] = time();

//xss
//function h($s) {
//    return htmlspecialchars($s, ENT_QUOTES);
//}

//templateに値をわたす
$smarty_obj->assign('input',  $input); //入力値全般
$smarty_obj->assign('csrf_token',  $csrf_token); //CSRC token
$smarty_obj->assign('error_detail_count',  count($error_detail));
$smarty_obj->assign('error_detail',  $error_detail); //エラー全般



//templateをdisplayする
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('inquiry.tpl');




?>



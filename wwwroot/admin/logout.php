<?php

require_once( __DIR__ . '/../init.php');


//セッション内のログイン情報を
unset($_SESSION['admin_auth']);

//indexに移動させる
header('Location: ./index.php');
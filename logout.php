<?php

session_start();

// ログインしたことを消す
$_SESSION["username"] = false;
$_SESSION["userid"] = false;
session_regenerate_id();

// ログインページに移動する
header("Location: http://localhost/folder/login.php");

?>

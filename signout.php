<?php


include_once ("db.php");
session_start();
session_destroy();

$logout=new login();
$logout->logout();
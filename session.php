<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 2017/5/9
 * Time: 22:56
 */
//注册session
session_start();
$_SESSION["admin"]=null;

//判断session是否存在
if(!empty($_SESSION['session_name']))
    $myname=$_SESSION['session_name'];
echo $myname;

?>
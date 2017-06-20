<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 2017/5/9
 * Time: 23:21
 */

session_start();
$_SESSION[user]=$_POST[user];
$_SESSION[pwd]=$_POST[pwd];
if($_SESSION[pwd] == " "){
    echo "<script language='JavaScript'>alert('密码为空');history.back();</script>";
}
echo $_SESSION[user];
echo $_SESSION[pwd];
?>


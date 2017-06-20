<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 2017/5/9
 * Time: 0:08
 */
if(!isset($_COOKIE["visittime"])){
    setcookie("visittime",date("y-m-d H:I:S"));
    echo "欢迎第一次访问网站！"."</br>";

}else{
    setcookie("visittime",date('y-m-d H:i:s'),time()+60);
    echo "您上次访问网站的时间为:".$_COOKIE["visittime"];
    echo "</br>";
}
    echo "您本次访问网站的时间为: ".date("y-m-d H:i:s");//输出本次访问网站的时间
?>
<meta http-equiv="Content-Type" content="text/html";charset="gb2312">

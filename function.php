<html>
<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 2017/5/7
 * Time: 23:44
 */

define(hello,'在 PH</hr></p>P中常量可以是字符串');

echo hello;

$a=1;
$b=2;
$c=$a +$b;
echo "</br>计算结果得到：$c";

//注意：PHP中的函数和js里面的函数定义完全一样
function ifun(){
    $c=9;
    $d=90;
    echo "</br>变量c的值为：$c";//双引号会部分隐式解析，单引号不会，所有视为字符串

}
    ifun();//执行这个函数
function inasd(){
    global $e,$r;//声明全局变量 e,c
    $GLOBALS["c"]=$GLOBALS["b"]+$GLOBALS["c"];
    $e=90;
    echo "</br>函数体内调用全局变量e $e";

}
inasd();
echo "</br>函数体外调用全局变量e $e";
echo "</br>全局数组的使用 $c";

$f=6;
$$f=7;
echo $$f;
$$$f=8;
echo "</br>";
echo $$f;
echo "</br>";
echo $$$f;

echo "</br>";
echo $_SERVER['PHP_SELF'];
echo "</br>";
echo $_SERVER['SERVER_NAME'];
echo "</br>";
echo $_SERVER['server_software'];
echo "</br>";
echo $_SERVER['document_root'];
echo "</br>";
echo $_SERVER['http_user_agent'];
echo "</br>";
echo $_SERVER['remote_addr'];
echo "</br>";
echo $_SERVER['remote_port'];


//php的foreach遍历
//php的字符链接符号是 . d点
echo "forech遍历如下：".$a;
$student = array("c"=>89,"e"=>99,"t"=>56);
foreach ($student as $item=>$score)
    echo "您的分数:$item=$score</br>" ;



$number=19776.9;
echo "格式化，就是按照正常格式来格式化目标值：".number_format($number);

echo "保留两位小数：".number_format($number,2);
echo "</br>";
echo "在php中小数点是可以被其他符号代替的".number_format($number,2,'.','.');

$str = "php学习@php编程@php开发";
echo "</br>";
$str_arr=explode("@",$str);
print_r($str_arr);


//php7.0之前的写法和现在不一样
//$time=date(string,int);$time=date('Y-m-j');
$time=date('Y-m-j');
$time1=date('Y-m-d');
$time2=date('Y-M-j');
$time3=date('g:i:s a');//以时分秒的格式来获取当前时间
$time4=date('h:i:s A');//格林威治
echo "</br>当前时间为:".$time;
echo "</br>当前时间为:".$time1;
echo "</br>当前时间为:".$time2;
echo "</br>当前时间为：".$time3;
echo "</br>当前时间为：".$time4;

echo "</br>今年是否是闰年:".date('L');//今年是否为闰年
echo "</br>今天是：".date('l');//获取星期几
echo "</br>星期天的缩写:".date('D');//获取星期的英文缩写
echo "</br>星期".date('w');
echo "</br>今年的第几周:".date('W');
echo "</br>这个月的第几天:".date('t');
echo "</br>今年的第几天:".date('z');

echo "</br>服务器时间区域的设置:".date('T');
echo "</br>当前是否为夏令时".date('I');
echo "</br>时间戳:".date('U');
echo "</br>ISO8601的日期:".date('c');
echo "</br>EFC822日期格式:".date('r');









?>
</html>

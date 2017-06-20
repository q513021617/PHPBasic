<html>
<head>
    <title>PHP测试代码页面</title>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 2017/5/6
 * Time: 14:11
 */

echo "第一种写法  用<?php ?>写法输出的 Hello World!";


?>
</hr></p>
    <script language="php">
        echo "第二种写法 利用script的写法 输出的";
    </script>

</hr></p>
<?
    echo "利用<? ?>的php写法</br>";
    echo "第三种写法 这种写法必须将php.ini 中的shor_open_tags设置为 on 才可以使用"
?>
</hr></p>
/*<%
    echo "利用<% %>的PHP写法</br>";
    echo "第四种写法 这种写法必须将php.ini中的args_tags设置为 on 才可以使用";
    %>    这种注释是高级语言常常使用到的形式*/
</html>

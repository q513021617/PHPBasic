<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="gb2312">
</head>
<body>
<script language="JavaScript">
    function check(form) {
        if(form,user.value==""){
            alert("请输入用户名");
            form.user.focus();
            return false;
        }
        if(form.pwd.value==""){
            alert("请输入密码");
            form.pwd.focus();
            return false;
        }
        form.submit();
    }
</script>
<form name="form1" method="post" action="default.php">
    <input name="user" id="user" type="text"></br>
    <input name="pwd" id="pwd" type="password"></br>
    <input name="button" type="submit" onclick="return check(form);"></br><!--此处form和form的name不是一样，应该尽可能避免与名称name重复-->
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<style>
    .form{
        width: 100px;
        height: 20px;
        box-sizing: border-box;
    }
    html{
        /* 把元素变成定位元素 */
        position: absolute;
        /* 元素距离上，左都为50% */
        left: 50%;
        top: 50%;
        /* 让元素的左外边距，上外边距为元素宽高的1/2 注意margin是负距*/
        margin-top: -65px;
        margin-left: -76.365px
    }
    button{
        height: 20px;
        width: 50px;
    }
</style>
<body>
<form action="form_action.asp" method="get">
    <p>原操作密码
        <input class="form" type="password" name="pwd1" />
    </p>
    <p>输入新密码
        <input class="form" type="password" name="pwd2" />
    </p>
    <p>重复新密码
        <input class="form" type="password" name="pwd3" />
    </p>
    <center>
        <button onclick="turnto()">修改</button>
    </center>
</form>
</body>
</html>
<script type="text/javascript">
    function turnto(){
        window.close();
        window.open('../app/Views/home.php','_blank','',true);
    }
</script>


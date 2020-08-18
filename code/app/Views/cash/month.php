<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>选择月份</title>
</head>
<style>
    .form{
        width: 50px;
        height: 20px;
        box-sizing: border-box;
    }
    html{
        /* 把元素变成定位元素 */
        position: absolute;
        /* 元素距离上，左都为50% */
        left: 50%;
        top: 30%;
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
    <p>
        <select class="form">
            <option value ="volvo">1</option>
            <option value ="saab">2</option>
            <option value ="volvo">3</option>
            <option value ="saab">4</option>
            <option value ="volvo">5</option>
            <option value ="saab">6</option>
            <option value ="volvo">7</option>
            <option value ="saab">8</option>
            <option value ="volvo">9</option>
            <option value ="saab">10</option>
            <option value ="volvo">11</option>
            <option value ="saab">12</option>
        </select>
    </p>
    <center>
        <button onclick="turnto()">查看</button>
    </center>
</form>
</body>
</html>
<script type="text/javascript">
    function turnto(){
        window.close();
        window.open('cash.php','_blank','',true);
    }
</script>


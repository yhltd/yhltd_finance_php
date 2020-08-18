<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>投资收入</title>
    <link rel="stylesheet" href="/public/bootstrap-table-master/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="/public/bootstrap-3.3.7/dist/css/bootstrap.css">
</head>
<style>
    .table-a table{border:1px solid #F00}
    /* css注释：只对table标签设置红色边框样式 */
</style>
<body>
<!--1.创建一个八行一列的表格-->
<table border="1px" width="1300px" align="center" cellpadding="0px" cellspacing="0px">
    <!--3.导航栏-->
    <tr height="50px" >
        <td bgcolor="black">
            <center>
                <a href="../../home/home.php"><font size="3" color="white">返回首页</font></a>
                <a href="../../ledger/ledger.php"><font color="white">科目总账</font></a>
                <a href="../../project/project.php"><font color="white">开支项目</font></a>
                <a href="../../department/department.php"><font color="white">部门配置</font></a>
                <a href="../../certificateDetailed/certificateDetailed.php"><font color="white">凭证明细</font></a>
                <a href="../../see.php"><font color="white">智能看板</font></a>
                <a href="../../cash/month.php"><font color="white">现金流量</font></a>
                <a href="../../assetsLiabilities/assetsLiabilities.php"><font color="white">资产负债</font></a>
                <a href="../../profit/profit.php"><font color="white">利润损益</font></a>
                <a href="../../simple/simple.php"><font color="white">极简财务</font></a>
            </center>
        </td>
        <td bgcolor="black">
            <center>
                <a href="insert.php"><font size="3" color="white">添加</font></a>
                <a href="#"><font color="white">删除</font></a>
            </center>
        </td>
    </tr>
</table>
<center>
    <table data-toggle="table" data-url="data1.json" border="1">
        <thead>
        <tr>
            <th data-field="id">投资收入</th>
        </tr>
        </thead>
    </table>
</center>
<script src="/public/jQuery.js"></script>
<script src="/public/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="/public/bootstrap-table-master/dist/bootstrap-table.min.js"></script>
</body>
</html>


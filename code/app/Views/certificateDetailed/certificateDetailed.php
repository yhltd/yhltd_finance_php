<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>凭证明细</title>
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
                <a href="../home/home.php"><font size="3" color="white">返回首页</font></a>
                <a href="../ledger/ledger.php"><font color="white">科目总账</font></a>
                <a href="../project/project.php"><font color="white">开支项目</font></a>
                <a href="../department/department.php"><font color="white">部门配置</font></a>
                <a href="../see.php"><font color="white">智能看板</font></a>
                <a href="../cash/month.php"><font color="white">现金流量</font></a>
                <a href="../assetsLiabilities/assetsLiabilities.php"><font color="white">资产负债</font></a>
                <a href="../profit/profit.php"><font color="white">利润损益</font></a>
                <a href="../simple/simple.php"><font color="white">极简财务</font></a>
            </center>
        </td>
        <td bgcolor="black">
            <center>
                <a href="insert.php"><font size="3" color="white">添加</font></a>
                <a href="update.php"><font color="white">修改</font></a>
                <a href="#"><font color="white">删除</font></a>
                <a href="select.php"><font color="white">查询</font></a>
                <a href="examine.php"><font color="white">审核</font></a>
            </center>
        </td>
    </tr>
</table>
<center>
    <table data-toggle="table" data-url="data1.json" border="1">
        <thead>
        <tr>
            <th data-field="id">凭证字</th>
            <th data-field="name">凭证号</th>
            <th data-field="direction">日期</th>
            <th data-field="money">摘要</th>
            <th data-field="borrow">科目代码</th>
            <th data-field="loan">科目名称</th>
            <th data-field="id">方向</th>
            <th data-field="name">金额</th>
            <th data-field="direction">部门</th>
            <th data-field="money">开支项目</th>
            <th data-field="borrow">备注</th>
            <th data-field="loan">审核人</th>
            <th data-field="money">应收/应付</th>
            <th data-field="borrow">已收/已付</th>
            <th data-field="loan">未收/未付</th>
        </tr>
        </thead>
    </table>
</center>
<script src="/public/jQuery.js"></script>
<script src="/public/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="/public/bootstrap-table-master/dist/bootstrap-table.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>首页</title>
</head>
<body>
<!--1.创建一个八行一列的表格-->
<table border="1px" width="1300px" align="center" cellpadding="0px" cellspacing="0px">
    <!--2.logo部分-->
    <tr>
        <td>
            <!--嵌套一个一行三列的表格-->
            <table border="1px" width="100%">
                <tr height="50px">
                    <td width="33.3%" height="50px">
                        <img src="../img/head1.png" width="100%"/>
                    </td>
                    <td width="33.3%" hspace="0" vspace="0" margin=0px>
                        <img src="../img/head2.jpg" width="100%" height="100%" style="display:block"/>
                    </td>
                    <td width="33.3%">
                        <center>
                            <div>
                                <a href="pwd.php">修改登录密码</a>
                                <a href="do.php">修改操作密码</a>
                                <a href="account.php">新建账号</a>
                            </div>
                        </center>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!--3.导航栏-->
    <tr height="50px" >
        <td bgcolor="black">
            <center>
                <a href="../ledger/ledger.php"><font color="white">科目总账</font></a>
                <a href="../project/project.php"><font color="white">开支项目</font></a>
                <a href="../department/department.php"><font color="white">部门配置</font></a>
                <a href="../certificateDetailed/certificateDetailed.php"><font color="white">凭证明细</font></a>
                <a href="../see.php"><font color="white">智能看板</font></a>
                <a href="../cash/month.php"><font color="white">现金流量</font></a>
                <a href="../assetsLiabilities/assetsLiabilities.php"><font color="white">资产负债</font></a>
                <a href="../profit/profit.php"><font color="white">利润损益</font></a>
                <a href="../simple/simple.php"><font color="white">极简财务</font></a>
            </center>
        </td>
    </tr>

    <!--4.轮播图-->
    <tr>
        <td>
            <img src="../img/finance.jpg" width="100%" style="display:block"/>
        </td>
    </tr>
    <!--5.最新商品-->
    <tr>
        <td>
            <!--嵌套一个三行七列的表格-->
            <table border="1px" width="100%">
                <tr height="50px">
                    <td colspan="7">
                        <font size="5">&nbsp主要功能</font>
                        <img src="../img/introduce.jpg" height="25px"/>
                    </td>
                </tr>

                <tr>
                    <td rowspan="2" width="190px" height="500px" hspace="0" vspace="0" margin=0px>
                        <img src="../img/all.jpg" width="100%" height="100%" style="display:block;vertical-align: bottom;"/>
                    </td>

                    <td colspan="3" width="555px" height="250px">
                        <a href="#"><img src="../img/money.jpg" width="100%" height="100%"/></a>
                    </td>

                    <td width="185px" height="250px" align="center">
                        <a href="#"><img src="../img/department.jpg" width="100%" height="100%"/></a><br />
                        <a href="#"><font color="gray">部门配置</font></a><br /><br />
                    </td>

                    <td width="185px" height="250px" align="center">
                        <a href="#"><img src="../img/account.jpg" width="100%" height="100%"/></a><br />
                        <a href="#"><font color="gray">账号设置</font></a><br /><br />
                    </td>

                    <td width="185px" height="250px" align="center">
                        <a href="#"><img src="../img/voucher.jpeg" width="100%" height="100%"/></a><br />
                        <a href="#"><font color="gray">凭证明细</font></a><br /><br />
                    </td>
                </tr>
                <tr>
                    <td width="185px" height="250px" align="center">
                        <a href="#"><img src="../img/see.jpg" width="100%" height="100%"/></a><br />
                        <a href="#"><font color="gray">智能看板</font></a><br /><br />
                    </td>
                    <td width="185px" height="250px" align="center">
                        <a href="#"><img src="../img/cash.jpg" width="100%" height="100%"/></a><br />
                        <a href="#"><font color="gray">现金流量</font></a><br /><br />
                    </td>
                    <td width="185px" height="250px" align="center">
                        <a href="#"><img src="../img/assets.jpg" width="100%" height="100%"/></a><br />
                        <a href="#"><font color="gray">资产负债</font></a><br /><br />
                    </td>
                    <td width="185px" height="250px" align="center">
                        <a href="#"><img src="../img/profit.jpg" width="100%" height="100%"/></a><br />
                        <a href="#"><font color="gray">利润损益</font></a><br /><br />
                    </td>
                    <td width="185px" height="250px" align="center" colspan="2">
                        <a href="#"><img src="../img/simple.jpg" width="100%" height="100%"/></a><br />
                        <a href="#"><font color="gray">极简财务</font></a><br /><br />
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!--6.广告图片-->
    <tr>
        <td>
            <img src="../img/finance2.jpg" width="100%" style="display:block"/>
        </td>
    </tr>

    <!--7.广告图片-->
    <tr>
        <td>
            <img src="../img/finance1.jpg" width="100%" style="display:block"/>
        </td>
    </tr>

    <!--8.友情链接和版权信息-->
    <tr>
        <td align="center">
            <a href="#"><font>关于我们</font></a>
            <a href="#"><font>联系我们</font></a>
            <a href="#"><font>法律声明</font></a>
            <a href="#"><font>服务声明</font></a>
            <p>
                Copyright © 2018-2020 云合未来 版权所有
            </p>
        </td>
    </tr>
</table>
</body>
</html>
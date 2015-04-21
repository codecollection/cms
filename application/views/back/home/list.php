<ul class="manage_btn">
        <?php foreach($nav as $k => $v){?>
        <li><a href="<?php echo $v['url'];?>"  <?php if ($v['level'] == $thisc->activeModule) echo 'class="current"';?>><?php echo $v['title'];?></a></li>
        <?php }?>
        
    </ul>
    
    <div class="crumbs">
        <span class="cbs_left">
            <?php 
            //$countNav = count($navItem);
            //foreach($navItem as $k => $v){?>
            <a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
            <?php //if($k < $countNav - 1) echo('<em>></em>');?>
            <?php //}?>
            
        </span>
    </div>
    <p class="line-t-15"></p>
<div>
    <!--统计概览-->
    <div class="totals clearfix">
        <ul>
            <li class="hdli">文档</li>
            <li><a href="info.list.php?info_status=-1">草稿（0）</a></li>
            <li><a href="info.list.php?info_status=3">未通过（0）</a></li>
            <li><a href="info.list.php?info_status=2">审核中（0）</a></li>
            <li><a href="info.list.php?info_status=0">已通过（22）</a></li>
            <li><a href="info.list.php?info_status=1">回收站（0）</a></li>
        </ul>
        <ul>
            <li class="hdli">用户</li>
            <li><a href="user.php?login_status=0">正常（1）</a></li>
            <li><a href="user.php?login_status=1">禁用（0）</a></li>
            <li><a href="user.php?login_status=2">未激活（0）</a></li>
        </ul>
    </div>
    <p class="line-t-10" style="clear:both;"></p>
    <!--系统信息 -->
    <div class="columns-mod l">
        <div class="hd">
            <h5>系统信息</h5>
        </div>
        <div class="bd">
            <div class="sys-info">
                <table>
                    <tr>
                        <th>Mcms版本</th>
                        <td>3.1.3</td>
                    </tr>
                    <tr>
                        <th>服务器操作系统</th>
                        <td>Darwin</td>
                    </tr>
                    <tr>
                        <th>运行环境 </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>MYSQL版本</th>
                        <td>5.5.38</td>
                    </tr>
                    <tr>
                        <th>上传限制</th>
                        <td>1MB</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!--产品团队 -->
    <div class="columns-mod r">
        <div class="hd">
            <h5>产品团队</h5>
        </div>
        <div class="bd">
            <div class="sys-info">
                <table>
                    <tr>
                        <th>版权所有</th>
                        <td id="copyright"><a target="_blank" href="" title="">xxxxxxxxxxxx</a></td>
                    </tr>
                    <tr>
                        <th>总策划</th>
                        <td id="producer">xxx</td>
                    </tr>
                    <tr>
                        <th>产品设计及研发团队</th>
                        <td id="team">xxx  xxxx xxxx</td>
                    </tr>
                    <tr>
                        <th>官方网址</th>
                        <td id="official_website"><a target="_blank" href="" title="">xxxxxxx</a></td>
                    </tr>
                    <tr>
                        <th>官方QQ群</th>
                        <td id="official_qq">
                            <a target="_blank" href="">		<img border="0" title="MCMS交流群1" alt="" src="http://pub.idqqimg.com/wpa/images/group.png">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .columns-mod{
        width:490px;
        height:320px;
        border-radius: 5px;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
    }
    .hd{
        border-radius: 5px 5px 0 0;
        -moz-border-radius: 5px 5px 0 0;
        -webkit-border-radius: 5px 5px 0 0;
        background-color: #F2F2F2;
        height: 30px;
        line-height: 30px;
        padding: 0 10px 0 15px;
    }
    .bd{
        background-color: rgba(250, 250, 250, 0.3);
        border-radius: 0 0 5px 5px;
        -moz-border-radius: 5px 5px 0 0;
        -webkit-border-radius: 5px 5px 0 0;
        height: 200px;
        overflow: hidden;
        border-bottom: 1px solid #F2F2F2;
        border-left: 1px solid #F2F2F2;
        border-right: 1px solid #F2F2F2;
    }
    .sys-info{
        padding: 15px;
    }
    .sys-info table{
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        margin: 0;
        padding: 0;
    }
    .sys-info table a:hover{text-decoration: none;}
    .sys-info th {
        font-weight: normal;
        text-align: left;
        width: 30%;
        font-size:14px;
    }
    .sys-info th, .sys-info td {
        height: 20px;
        line-height: 20px;
        padding: 5px 0;
        font-size:12px;
    }
    .totals{
        border-radius: 5px;
        -moz-border-radius: 5px 5px 0 0;
        -webkit-border-radius: 5px 5px 0 0;
        margin:5px 0 5px 0;
        background-color: rgba(250, 250, 250, 0.3);
        border:1px solid #eee;
    }
    .totals ul{clear:both;}
    .totals li {
        float:left;
        margin-left:15px;
        font-size:12px;
        height: 30px;
        line-height: 29px;
        width: 100px;
    }
    .totals li a{line-height: 29px;}Ï
    .totals li a:hover{text-decoration: none;}
    .totals .hdli {
        font-size:14px;
        font-weight: bold;
    }
</style>
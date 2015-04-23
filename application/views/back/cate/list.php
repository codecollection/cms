<ul class="manage_btn">
    <li><a href="index.php">统计概览</a></li><li><a href="info.list.php">文档管理</a></li><li><a href="category.php" class="current">分类管理</a></li>    </ul>
<p class="line-t-6"></p>
<div class="crumbs">
    <div class="l son_menu"><span class="txt" onclick="window.location.href = 'info.list.php';">全部分类<em>></em></span>
        <div class="son_div">
            <ul class="tree"><li id="li1"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=1">公司动态</a></li><li id="li2"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=2">产品中心</a><ul class="tree"><li id="li5"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=5">MCMS企业站系统</a></li><li id="li6"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=6">MCMS商城系统</a></li><li id="li7"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=7">MCMS比赛投票系统</a></li></ul></li><li id="li3"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=3">成功案例</a></li><li id="li4"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=4">关于我们</a></li><li id="li11"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=11">商业服务</a></li><li id="li9"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=9">给我留言</a></li><li id="li8"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=8">系统特点</a></li><li id="li10"><span onclick="tree_icon_click(this);" class="tree-icon tree-expand-open"></span><a  href="category.php?cate_id=10">服务支持</a></li></ul>                <p class="line-t-10"></p>
        </div>
    </div>
    <span class="cbs_left">
        <a href="category.php">分类管理</a>
    </span>
    <span class="cbs_right"><a href="javascript:void(0);" onclick="show_more('query_box_category');">高级查询</a></span>
</div>
<p class="line-t-20"></p>
<div id="query_box_category" style="display:none;">
    <div class="box_970" id="screen">
        <ul class="screening se_manage res_scre">
            <li>
                <form action="?" method="get" name="search">
                    <span class="l">分类名称</span>
                    <input type="text" class="comm_ipt l" name="cname" value="">
                    <span class="l">字母别名</span>
                    <input type="text" class="comm_ipt l" name="cname_py" value="">
                    &nbsp;&nbsp;&nbsp;<input type="submit" class="btn" value="查询" />
                </form>
            </li>
        </ul>
    </div>
    <p class="line-t-20"></p>
</div>
<!-- 树 -->

<div class="box2 box4" style="width:100%;">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td width="40"><input type="checkbox"  onclick="C.form.check_all('.chk_list');"></td>
                <td>ID</td>
                <td width="60">排序</td>
                <td>分类名称</td>
                <td>分类别名</td>
                <td width="120">导航显示</td>
                <td width="120"></td>
                <td width="60">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){ ?>
            <tr id="<?php echo "formli1".$k?>">
                <td><input type="checkbox" class="chk_list" value="<?php echo $v["cate_id"];?>"></td>
                <td><a href="/" target="_blank"><?php echo $v["cate_id"];?></a></td>
                <td><input id="corder" type="text" pid="<?php echo $v["cate_id"];?>" class="comm_ipt corder" style="width:30px;" value="<?php echo $v["corder"];?>"></td>
                <td><input id="corder" type="text"  class="comm_ipt cname" style="width:160px;"  value="<?php echo $v["cname"];?>">
                    <a  href="/back/cate?pid=1">查看下级</a>
                </td>
                 <td><?php echo $v["cnick"];?>
                </td>
                <td>PC:<?php echo $this->vars->get_field_str("nav_show",1); ?> &nbsp;&nbsp;WAP:<?php echo $this->vars->get_field_str("nav_show",0); ?></td>
                <td style="color:#888;text-align:left;line-height:160%;">
                    &nbsp;&nbsp;                                                                                                        </td>
                <td>
                    <a class="btn" href="/back/cate/edit?id=<?php echo $v["cate_id"];?>">编辑</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    
</div>
<p class="line-t-20"></p>

<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="/back/cate/add" class="btn3">添加分类</a>

        <a href="javascript:void(0);" class="btn3" onclick="C.form.update_field('category.php?m=save_all&ajax=1', '.corder');">批量修改</a>

        <a href="javascript:void(0);" class="btn3" onclick="del();">批量删除</a>
    </div>
</div>
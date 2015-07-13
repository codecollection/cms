<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>
            MCMS安装前环境检测
        </title>
        <meta content="" name="keywords">
        <meta content="" name="description">
		<script src="/static/libs/jquery-1.7.1.min.js"></script>
		<script src="/static/libs/common.js"></script>
		<script src="step/js/comm.js"></script>
        <link rel="stylesheet" type="text/css" href="step/style.css">
    </head>
    <body>
		<div class="wrap">
			<?php require('head.php');?>
			<div class="section">
				<div class="step">
					<ul>
						<li class="current"><em>1</em>检测环境</li>
						<li><em>2</em>创建数据</li>
						<li><em>3</em>完成安装</li>
					</ul>
				</div>
				<div class="server">
					<table width="100%">
						<tbody>
							<tr>
								<td class="td1">环境检测</td>
								<td width="35%" class="td1">当前状态</td>
								<td width="25%" class="td1">最低要求</td>
							</tr>
							<tr>
								<td>操作系统</td>
								<td>
									<span class="correct_span">√</span><?php echo $result[0]['sys'];?>
								</td>
								<td>不限制</td>
							</tr>
							<tr>
								<td>web服务器</td>
								<td><span class="<?php
								if(version_compare(PHP_VERSION, '5.0.0') >= 0) {
									echo 'correct_span';
								}else{
									echo 'error_span';
									$_SESSION['is_through'] = false;
								}
								?>">√</span><?php echo $result[0]['web_server'];?></td>
								<td>php>=5.3</td>
							</tr>
							<tr>
								<td>支持GD</td>
								<td><span class="<?php echo $result[0]['gd'] ? 'correct_span' : 'error_span';?>">√</span><?php echo $result[0]['gd'];?>
								</td>
								<td>支持</td>
							</tr>
							<tr>
								<td>支持json</td>
								<td><span class="<?php echo $result[0]['json'] ? 'correct_span' : 'error_span';?>">√</span><?php echo $result[0]['json'] ? '支持' : '不支持';?>
								</td>
								<td>支持</td>
							</tr>
						</tbody>
					</table>
					<table width="100%">
						<tbody>
							<tr>
								<td class="td1">目录、文件权限检查</td>
								<td width="35%" class="td1">当前状态</td>
								<td width="25%" class="td1">所需状态</td>
							</tr>
							<?php foreach ($result[1] as $k=>$v ) {?>
							<tr>
								<td><?php echo str_replace(ROOT,'',$v['0']);?></td>
								<td><span class="<?php echo $v[1] ? 'correct_span' : 'error_span';?>">√</span></td>
								<td>读写</td>
							</tr>
							<?php  } ?>
						</tbody>
					</table>
				</div>
				<div style="text-align: center; margin:0 0 15px; color: red;display:<?php echo $_SESSION['is_through'] ? 'none' : 'block';?>;">环境检测失败，请修复以上检测不通过项，再进行下一步安装。</div>
				<div class="bottom tac">
					<a href="index.php?action=2" class="btn">重新检测</a>

					<a href="index.php?action=1" class="btn">上一步</a>

					<?php if($_SESSION['is_through']) {?>
					<a href="index.php?action=3" class="btn">下一步</a>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php require('foot.php');?>
	</body>
</html>
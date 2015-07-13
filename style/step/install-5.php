<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>
            MCMS安装完毕 自动跳转中……
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
						<li><em>1</em>检测环境</li>
						<li><em>2</em>创建数据</li>
						<li class="current"><em>3</em>完成安装</li>
					</ul>
				</div>
				<div class="server">
					<div class="main cc">
						<div class="success_tip">
							<a class="f16 b" href="<?php echo 'http://'.str_replace('http://','',$_SERVER['SERVER_NAME']);?>">
								安装完成，点击进入前台
							</a>
							<p>
								浏览器即将自动跳转入后台
							</p>
							<script type="text/javascript">
								setTimeout("go_houtai()",3000);
								/**
								 *
								 * 跳转到后台
								 */
								function go_houtai() {
									window.location.href = 'http://<?php echo $_SERVER['SERVER_NAME'];?>/app/<?php echo ADMIN_PATH;?>/login.php';
								} // end func
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require('foot.php');?>
	</body>
</html>
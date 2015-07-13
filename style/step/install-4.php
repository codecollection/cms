<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>
            MCMS安装细节显示
        </title>
        <meta content="" name="keywords">
        <meta content="" name="description">
		<script src="/static/libs/jquery-1.7.1.min.js"></script>
		<script src="/static/libs/common.js"></script>
		<script src="step/js/comm.js"></script>
        <link rel="stylesheet" type="text/css" href="step/style.css">
		<script type="text/javascript">
			var info = <?php echo H::json_encode_ch($_SESSION['create_info']);?>;
		</script>
    </head>
    <body>
		<div class="wrap">
			<?php require('head.php');?>
			<div class="section">
				<div class="step">
					<ul>
						<li><em>1</em>检测环境</li>
						<li class="current"><em>2</em>创建数据</li>
						<li><em>3</em>完成安装</li>
					</ul>
				</div>
				<div id="log" class="install">
					<ul id="loginner">

					</ul>
				</div>
				<div class="bottom tac">
					<a class="btn_old" id="btn_old" href="javascript:;">正在安装...</a>
				</div>
			</div>
		</div>
		<?php require('foot.php');?>
		<script type="text/javascript">
			$(function(){ show_info();});
		</script>
	</body>
</html>
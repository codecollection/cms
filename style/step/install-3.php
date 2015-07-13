<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>
            MCMS安装信息填写
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
						<li class="current"><em>2</em>创建数据</li>
						<li><em>3</em>完成安装</li>
					</ul>
				</div>
				<div class="server" id="install">
					<table width="100%">
						<tbody>
							<tr>
								<td width="120" class="td1">数据库信息</td>
								<td width="200" class="td1">&nbsp;</td>
								<td class="td1">&nbsp;</td>
							</tr>
							<tr>
								<td class="tar">数据库服务器：</td>
								<td><input type="text" class="input" value="<?php echo isset($_SESSION['db_info']['dbhost']) ? $_SESSION['db_info']['dbhost'] : 'localhost';?>" id="dbhost"></td>
								<td><span class="gray">数据库服务器地址，一般为localhost</span></td>
							</tr>
							<tr>
								<td class="tar">数据库服务器用户名：</td>
								<td><input type="text" class="input" value="<?php echo isset($_SESSION['db_info']['dbuser']) ? $_SESSION['db_info']['dbuser'] : 'root';?>" id="dbuser"></td>
								<td></td>
							</tr>
							<tr>
								<td class="tar">数据库服务器密码：</td>
								<td><input type="text" class="input" value="<?php echo isset($_SESSION['db_info']['dbpw']) ? $_SESSION['db_info']['dbpw'] : '';?>" id="dbpw"></td>
								<td></td>
							</tr>
							<tr>
								<td class="tar">数据库名：</td>
								<td><input type="text" class="input" value="<?php echo isset($_SESSION['db_info']['dbname']) ? $_SESSION['db_info']['dbname'] : '';?>" id="dbname"></td>
								<td><span class="gray">必须以字母开头，只允许字母、数字、下划线</span></td>
							</tr>
							<tr>
								<td class="tar">数据库表前缀：</td>
								<td><input type="text" class="input" value="<?php echo isset($_SESSION['db_info']['pre']) ? $_SESSION['db_info']['pre'] : 'mcms_';?>" id="pre"></td>
								<td><span class="gray">建议使用默认，同一数据库安装多个MCMS程序时需修改</span></td>
							</tr>
									</tbody></table>
									<table width="100%">
							<tbody><tr>
								<td width="100" class="td1">后台登录信息</td>
								<td width="200" class="td1">&nbsp;</td>
								<td class="td1">&nbsp;</td>
							</tr>
                            <tr>
                                <td class="tar">管理后台目录：</td>
                                <td><input type="text" class="input" value="<?php echo isset($_SESSION['db_info']['admin_path']) ? $_SESSION['db_info']['admin_path'] : 'admin';?>" id="admin_path"></td>
                                <td>&nbsp;<font color="red">为了后台安全，请更改后台目录名称，不能含有admin,manage等敏感字符</font></td>
                            </tr>
							<tr>
								<td class="tar">管理员帐号：</td>
								<td><input type="text" class="input" value="<?php echo isset($_SESSION['db_info']['manager']) ? $_SESSION['db_info']['manager'] : 'mcmsadmin';?>" id="manager"></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td class="tar">密码：</td>
								<td><input type="text" class="input" id="manager_pwd" value="<?php echo isset($_SESSION['db_info']['manager_pwd']) ? $_SESSION['db_info']['manager_pwd'] : '';?>"></td>
								<td></td>
							</tr>
							<tr>
								<td class="tar">Email：</td>
								<td><input type="text" value="<?php echo isset($_SESSION['db_info']['manager_email']) ? $_SESSION['db_info']['manager_email'] : 'admin@admin.com';?>" class="input" id="manager_email"></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="bottom tac">

					<a href="index.php?action=2" class="btn">上一步</a>
					<a href="javascript:void(0);" onclick="test_database();" class="btn">下一步</a>
				</div>
			</div>
		</div>
		<?php require('foot.php');?>
	</body>
</html>
<?php
include "xmlbase.inc.php";//请填写你放置xmlbase文件的路径
include "agentxmlclient.inc.php";//请填写你放置agentxmlclient.inc.php文件的路径

define('VCP_SERVER', 'sms.todaynic.com');
define('VCP_SERVER_PORT', '20002');
define('VCP_USER', 'ms101858');
define('VCP_PWD', 'otqxnz');


class SMS extends XMLClient
{
	var $ConfNull="1";
	function SMS()
	{
            RKit::loadFile(APPPATH . "libraries/sms/config.inc.php");
		$this->serverURL=VCP_SERVER.":".VCP_SERVER_PORT;
		$this->XMLType="SMS";
		$this->VCP=VCP_USER;
		$this->VCPPassword=VCP_PWD;
	}
	//发送SMS短信接口
	function sendSMS($mobile, $msg, $time="", $apitype=0)
	{
		$xml_command="<action>SMS:sendSMS</action>
						<sms:mobile>$mobile</sms:mobile>
						<sms:message>".base64_encode($msg)."</sms:message>
						<sms:datetime>$time</sms:datetime>
						<sms:apitype>$apitype</sms:apitype>";
		$this->sendSCPData($this->serverURL, $xml_command);
		$this->toPlain();
		return $this->responseXML;
	}
	//查询远程账户余额
	function infoSMSAccount()
	{
		$xml_command="<action>SMS:infoSMSAccount</action>";
		$this->sendSCPData($this->serverURL, $xml_command);
		$this->toPlain();
		return $this->responseXML;
	}
	//接收SMS短信接口
	function readSMS()
	{
		$xml_command="<action>SMS:readSMS</action>";
		$this->sendSCPData($this->serverURL, $xml_command);
		$this->toPlain();
		return $this->responseXML;
	}

	function updateConf($username, $pass, $server){
		if(!file_exists("api/config.inc.php")) return "文件smsdemo/api/config.inc.php 不存在！";
		if(!is_writable("api/config.inc.php")) return "文件smsdemo/api/config.inc.php 不可写！请检查文件属性！";
		$fd = fopen("api/config.inc.php","w");
		if(!$fd) return "文件smsdemo/api/config.inc.php 打不开, 请检查文件属性！";
		$line = '<? '."\n".
				'/** '."\n".
				' * 这是配置文件 '.
				' * $'."vcpserver		SCP服务器地址，测试服务器为testxml.todaynic.com，正式服务器为sms.todaynic.com "."\n".
				' * $'."vcpserverport	SCP服务器，在测试环境和真实环境，使用的接口均为20002 "."\n".
				' * $'."vcpsuser		时代互联提供的真实短信用户或测试用户 "."\n".
				' * $'."vcppassword		 时代互联提供的真实短信用户密码或测试用户密码 "."\n".
				' * '."\n".
				' * www.now.cn,Inc. http://www.now.cn '."\n".
				'**/ '."\n".
				'$'.'vcpserver="'.$server.'"; '."\n".
				'$'.'vcpserverport="20002"; '."\n".
				'$'.'vcpuser="'.$username.'"; '."\n".
				'$'.'vcppassword="'.$pass.'"; '."\n".
				'?> '."\n";
		if(fwrite($fd, $line)===FALSE) return "文件smsdemo/api/config.inc.php 写入失败！请检查文件属性！";
		fclose($fd);
		return "1";
	}
}

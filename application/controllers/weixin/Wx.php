<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 微信开发中验证
 * 
 */
class Wx extends WeixinBase {

    public function __construct() {

        parent::__construct();
    }

    /**
     * 验证微信服务器
     */
    public function index() {

        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = $this->token;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);

        if ($tmpStr == $signature) {

            $this->responseMsg();
            return true;
        } else {
            return false;
        }
    }

    private function responseMsg() {
        //获取信息
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        if (!empty($postStr)) {

            libxml_disable_entity_loader(true);
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);

            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $time = time();
            $msgType = $postObj->MsgType;
            
            if (!empty($keyword)) {
                $resmsgType = "text";
                $contentStr = "Welcome to wechat world!";
                $resultStr = sprintf($this->textTpl, $fromUsername, $toUsername, $time, $resmsgType, $contentStr);
                echo $resultStr;
            } else {
                echo "Input something...";
            }
        }else{
            echo "";
            exit;
        }
    }

}

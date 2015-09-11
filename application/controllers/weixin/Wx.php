<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 微信开发中验证
 * 
 */
class Wx extends WeixinBase {
    //回复文本内容
    public $contentStr = "";
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
        $echoStr = $_GET["echostr"];
        
        $token = $this->token;
        
        $tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            echo($echoStr);
            $this->responseMsg();
            return true;
        }else{
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
            
            //关注事件
            if($msgType == "event"){
                $this->loadModel("weixin/wxuser");
                if($postObj->Event == "subscribe"){ //关注
                    $this->contentStr = "欢迎关注不倒翁科技微信公众号";
                    //加入到本地数据库
                    $data = array(
                        "open_id" => $fromUsername,
                        "cdate" => $time,
                        "status" => 1,
                    );
                    
                    $this->wxuser->setAttrs($data)->setPkValue($fromUsername)->save();
                    
                }else if($postObj->Event == "unsubscribe"){ //取消关注
                    $data = array(
                        "open_id" => $fromUsername,
                        "status" => 2,
                    );
                    $this->wxuser->setAttrs($data)->setPkValue($fromUsername)->save(FALSE);
                }
            }
            
            if (!empty($keyword)) {
                $resmsgType = "text";
                $resultStr = sprintf($this->textTpl, $fromUsername, $toUsername, $time, $resmsgType, $this->contentStr);
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

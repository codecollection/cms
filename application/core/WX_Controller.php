<?php

/**
 * 微信控制器
 */
class WeixinBase extends CBase {

    public $token = "wenghe"; //token 
    public $aesKey = ""; //EncodingAESKey
    protected $appId = "wxe456b49da24f9d88";
    protected $appSecret = "021d5a11d052ebd04decf12d2731935c";
    public $weixinApiUrl = "https://api.weixin.qq.com";
    private $actionUrl = "";

    public $listUrl = "";
    
    public $addUrl = "";
    
    public $updateUrl = "";
    
    public $deleteUrl = "";
    public function __construct() {

        parent::__construct();
        
        $this->listUrl = $this->weixinApiUrl . $this->listUrl . $this->token;
        $this->addUrl = $this->weixinApiUrl . $this->addUrl . $this->token;
        $this->updateUrl = $this->weixinApiUrl . $this->updateUrl . $this->token;
        $this->deleteUrl = $this->weixinApiUrl . $this->deleteUrl . $this->token;
    }

    /**
     * 设置curl提交的路劲
     * @param type $actionUrl
     */
    public function setActionUrl($actionUrl) {
        $this->actionUrl = $actionUrl;
    }

    /*
     * 获取提交的路劲
     */
    public function getActionUrl() {
        return $this->actionUrl;
    }

    public function lists($params = array()){
        
        $lists = $this->getData();
        
        $this->setData("lists", $lists);
        
        $this->renderWeixinView($this->controllerId . "/list");
    }
    
    /**
     * 
     */
    public function getRequestData(){
        //初始化
        $ch = curl_init();

        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $this->getActionUrl());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        //执行并获取HTML文档内容
        $output = curl_exec($ch);

        //释放curl句柄
        curl_close($ch);
        
        $data = json_decode($output,true);
        
        return $data;
    }

    /**
     * 利用curl提交数据
     * 
     * @param type $data
     * @return type
     */
    public function postData($data){
        
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->getActionUrl());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // post数据
        curl_setopt($ch, CURLOPT_POST, 1);
        // post的变量
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $output = curl_exec($ch);
        curl_close($ch);
        
        return json_decode($output,true);
    }

    
    public function postFile($filename,$path,$type){
        
        $data = array(
            'pic'=>'@'.realpath($path).";type=".$type.";filename=".$filename
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getActionUrl());
        curl_setopt($ch, CURLOPT_POST, true );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_getinfo($ch);
        $output = curl_exec($ch);
        curl_close($ch);
        return json_decode($output,true);    
   
    }

    /**
     * 显示导出文件的模板页面
     * @param string $viewName
     * @param array $data
     */
    protected function renderWeixinView($viewName, $data = array()) {
        
        $userInfo = array();
        $mainContent = $this->load->view("weixin/{$viewName}", array_merge(array("thisc"=>$this), $this->renderData, $data),true);
        $menu = NavPanel::getInstance()->getUserMenus($this->activeModule,$this->level);
        $frameData = array(
            "thisc" => $this,
            "mainContent" => $mainContent,
            "nav" => $menu['nav'],
            'microtime' => $this->microtime_float() - $this->startMicrotime,
            "navItem" => $menu['item'],
            "u" => $_SESSION["user"],
            'js' => implode("\r\n", $this->frontFile['js']),
            'css' => implode("\r\n", $this->frontFile['css']),
        );
        $this->load->view("weixin/frame", array_merge($frameData, $userInfo, $this->renderData, $data));
    }
    
    public $textTpl = "<xml>
                        <ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%s</CreateTime>
                        <MsgType><![CDATA[%s]]></MsgType>
                        <Content><![CDATA[%s]]></Content>
                        <FuncFlag>0</FuncFlag>
                        </xml>";
    
    public $imgTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <PicUrl><![CDATA[%s]]></PicUrl>
                    <MediaId><![CDATA[%s]]></MediaId>
                    <MsgId>%s</MsgId>
                    </xml>";
    public $voiceTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[voice]]></MsgType>
                    <MediaId><![CDATA[media_id]]></MediaId>
                    <Format><![CDATA[Format]]></Format>
                    <MsgId>1234567890123456</MsgId>
                    </xml>";

    /**
     * 视频
     * @var type 
     */
    public $videoTpl = "<xml>
                    <ToUserName><![CDATA[toUser]]></ToUserName>
                    <FromUserName><![CDATA[fromUser]]></FromUserName>
                    <CreateTime>1357290913</CreateTime>
                    <MsgType><![CDATA[video]]></MsgType>
                    <MediaId><![CDATA[media_id]]></MediaId>
                    <ThumbMediaId><![CDATA[thumb_media_id]]></ThumbMediaId>
                    <MsgId>1234567890123456</MsgId>
                    </xml>";

    /**
     * 小视频
     * @var type 
     */
    public $shortvideoTpl = "<xml>
                    <ToUserName><![CDATA[toUser]]></ToUserName>
                    <FromUserName><![CDATA[fromUser]]></FromUserName>
                    <CreateTime>1357290913</CreateTime>
                    <MsgType><![CDATA[shortvideo]]></MsgType>
                    <MediaId><![CDATA[media_id]]></MediaId>
                    <ThumbMediaId><![CDATA[thumb_media_id]]></ThumbMediaId>
                    <MsgId>1234567890123456</MsgId>
                    </xml>";
    public $locationTpl = "<xml>
                    <ToUserName><![CDATA[toUser]]></ToUserName>
                    <FromUserName><![CDATA[fromUser]]></FromUserName>
                    <CreateTime>1351776360</CreateTime>
                    <MsgType><![CDATA[location]]></MsgType>
                    <Location_X>23.134521</Location_X>
                    <Location_Y>113.358803</Location_Y>
                    <Scale>20</Scale>
                    <Label><![CDATA[位置信息]]></Label>
                    <MsgId>1234567890123456</MsgId>
                    </xml> ";
    public $linkTpl = "<xml>
                    <ToUserName><![CDATA[toUser]]></ToUserName>
                    <FromUserName><![CDATA[fromUser]]></FromUserName>
                    <CreateTime>1351776360</CreateTime>
                    <MsgType><![CDATA[link]]></MsgType>
                    <Title><![CDATA[公众平台官网链接]]></Title>
                    <Description><![CDATA[公众平台官网链接]]></Description>
                    <Url><![CDATA[url]]></Url>
                    <MsgId>1234567890123456</MsgId>
                    </xml> ";

}

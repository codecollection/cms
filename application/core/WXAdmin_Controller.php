<?php

/**
 * 微信后台管理接口
 */
class WXAdminBase extends CAdminBase{

    public $grant_type = "client_credential";
    
    public $accessToken = "";
    public $token = "wenghe"; //token 
    public $aesKey = ""; //EncodingAESKey
    protected $appId = "wxe456b49da24f9d88";
    protected $appSecret = "021d5a11d052ebd04decf12d2731935c";
    public $weixinApiUrl = "https://api.weixin.qq.com";
    private $actionUrl = "";
    public function __construct() {
        parent::__construct();
        //unset($_SESSION["access_token"]);
        $isReqAccessToken = isset($_SESSION["access_token"]) && !empty($_SESSION["access_token"]);
        if($isReqAccessToken){
            $this->accessToken = $_SESSION["access_token"];
            
        }else{
            $this->getAccessToken();
        }
    }

    /**
     * 获取认证
     */
    protected function getAccessToken(){
        
        $url = $this->weixinApiUrl . "/cgi-bin/token?grant_type={$this->grant_type}&appid={$this->appId}&secret={$this->appSecret}";
        
        $this->setActionUrl($url);
        $data = $this->getRequestData();
        
        if(!empty($data) && isset($data["access_token"])){
            if(isset($_SESSION['access_token'])) {unset($_SESSION["access_token"]);}
            //$expires_in = $data["expires_in"];
            $_SESSION["access_token"] = $data["access_token"];
            $this->accessTokon = $data["access_token"];
        }
    }
    
    
    /**
     * 
     */
    public function getRequestData($params = array()){
        //初始化
        $ch = curl_init();

        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $this->getActionUrl());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        if(!empty($params)){
            curl_setopt($ch,CURLOPT_POST,TRUE);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $params); 
        }
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
    public function postData($data = NULL){
        
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->getActionUrl());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        if(!empty($data)){
            // post数据
            curl_setopt($ch, CURLOPT_POST, 1);
            // post的变量
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        $output = curl_exec($ch);
        curl_close($ch);
        
        return json_decode($output,true);
    }

    
    /**
     * 上传图片
     * 
     * @param type $filename
     * @param type $path
     * @param type $type
     * @return type
     */
    public function postFile($data){
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getActionUrl());
        curl_setopt($ch, CURLOPT_POST, true );
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        //curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_getinfo($ch);
        $output = curl_exec($ch);
        curl_close($ch);
        return json_decode($output,true);    
   
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
    
    public function add() {
        
        $this->renderAdminView($this->viewDir(2), array_merge($this->renderData, array()));
    }
    
    public function edit() {
        $this->renderAdminView($this->viewDir(2), array_merge($this->renderData, array()));
    }
    
    /**
     * 重新请求accesstoken
     */
    public function recallAccessToken(){
        $this->getAccessToken();
       
    }
}

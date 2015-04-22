<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 上次文件
 */
class Upload extends CAdminBase {
    
    protected $controllerId = "myupload";
    
    protected $resourceTabel = "cms_resource_list";
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        $func = $this->getData('func');
        $vid = $this->getData("vid");
        
        $f = empty($func) ? 'callback_upload_thumb' : $func;
        
        $divId = empty($vid) ? 'logo' : $vid;
        
        echo($this->load->view($this->viewDir(),array("func"=>$f,"vid"=>$divId),true));
    }
    
    public function doUpload(){
        
        $func = $this->getData('func');
        $vid = $this->getData("vid");
        
        $f = empty($func) ? 'callback_upload_thumb' : $func;
        
        $divId = empty($vid) ? 'logo' : $vid;
        
        $upload = array('Field'=>'file');
        
        $file = $_FILES['file'];
        
        $fileUrl = RKit::doAttachment("upload", $upload);
        $resource = array(
            'size' => $file["size"],
            'oname' => $file["name"],
            'resource_url' => $fileUrl
        );
        if($fileUrl !== FALSE){
            $this->_addResource($resource);
        }
        
        $params = '{"params":{"func":"'.$f.'","vid":"'.$vid.'"'. '},"files":"'. $fileUrl .'"}';
        echo('<script>window.parent.callback_upload(\''.$params.'\');</script>');
        exit();
    }
    
    /*
     * 保存资源数据
     */
    private function _addResource($resource){
        
        $this->db->insert($this->resourceTabel,$resource);
    }
}

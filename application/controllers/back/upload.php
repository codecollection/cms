<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 上次文件
 */
class Upload extends CAdminBase {
    
    protected $controllerId = "upload";
    
    protected $resourceTabel = "cms_resource_list";
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        $params = $this->getData('params');
        
        if(empty($params)){
            $params = '{"func":"callback_upload_thumb","vid":"clogo","thumb":{"width":"300","height":"300"}}';
        }
        echo($this->load->view($this->viewDir(),array('params'=>$params),true));
    }
    
    public function doUpload(){
        $params = $this->getData('params');
        //print_r($params);
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
        
        $params='{\"params\":' . $params . ',\"files\":"'. $fileUrl .'"}';
        echo('<script>window.parent.callback_upload(\''.$params.'\');</script>');
        exit();
    }
    
    public function _addResource($resource){
        $this->db->insert($this->resourceTabel,$resource);
    }
}

<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 上次文件
 */
class Upload extends CAdminBase {
    
    protected $controllerId = "myupload";
    
    protected $resourceTabel = "cms_resource_list";
    
    protected $resourceInfoTable = "cms_resource_info";
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
        
        if($this->db->insert($this->resourceTabel,$resource)){
            return $this->db->insert_id();
        }
        return 0;
    }
    
    public function uploadify(){
        
        $t = $this->getData("type");
        $vid = $this->getData('vid');
        $func = $this->getData('func');
       
        $type = empty($t) ? "single_upload" : $t;
        $f = empty($func) ? 'callback_upload_thumb' : $func;
        
        $timestamp = time();
        $token = md5($this->verify . $timestamp);
        
        $data = array(
            'type'=>$type,
            "vid"=>$vid,
            "timestamp" => $timestamp,
            "token" => $token,
            "callfun" => $type,
            "limitSize" => 1024*1024*10,
        );
        $this->load->view($this->viewDir(3,'uploadify'),$data);
    }
    
    public function doIfy(){
     
        $this->load->library(array('UploadFile','Image'));
        
        $timestamp = $this->getData('timestamp');
        $token = $this->getData("token");
        $water = $this->getData("water");
        $vid = $this->getData("vid");
        $thumb_width = $this->getData("thumb_width");
        $thumb_height = $this->getData("thumb_height");
        $dir = $this->getData("dir");
        
        // 验证
        $verifyToken = md5($this->verify . $timestamp);
        if (empty($_FILES) || $token != $verifyToken) {
            $this->echoAjax(1, "上传数据提交失败");
        }
        
        $file_size=$_FILES['Filedata']['size'];//文件大小
        if($file_size>=1024*1024*100){
            $file_type='big';
        }else{
            $file_type='small';
        }

        // 上传目录自定义
        if (!empty($dir)) {
            $upload_path=$dir;
        }else{
            $upload_path= $this->rnd_dir();
        }
        
        //允许的文件类型
        $file_types = explode(',',  $this->fileType); // File extensions

        //保存文件路径
        $basePath = DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR;
        $save_path = realpath('.'). $basePath . "image" . DIRECTORY_SEPARATOR .$upload_path;//保存路径
        $save_path_thumb=realpath('.'). $basePath ."thumb" . DIRECTORY_SEPARATOR .$upload_path;//缩略图
        
        $upload_config = array();
        $upload_config['savePath'] = $save_path; //图片保存路径
        $upload_config['maxSize'] = 1024*1024*10;
        $upload_config['allowExts'] = $file_types;
     
        // 判断图片保存文件夹是否存在，不存在则创建
        if (!is_dir($upload_config['savePath'])) {RKit :: mkdirs($upload_config['savePath']);}
   
        $isImage = in_array(strtolower(pathinfo($_FILES['Filedata']['name'],PATHINFO_EXTENSION)),array('gif','jpg','jpeg','png','bmp'));
        
        //是否打水印
        if($isImage) {
            //开始收集参数
            if($water){
            $arr_water = $this->getWaterConfig();
            $upload_config['water'] = $arr_water;
            }
        }
        
        if($isImage){
            $thumb_width =  !empty($thumb_width) || $thumb_width > 0 ? intval($thumb_width):THUMB_WIDTH;
            $thumb_height = !empty($thumb_height)|| $thumb_height > 0 ? intval($thumb_height):THUMB_HEIGHT;
            
            $upload_config['thumb'] = true; //是否生成缩略图
            $upload_config['thumbMaxWidth'] = $thumb_width; // 缩略图最大宽度
            $upload_config['thumbMaxHeight'] = $thumb_height; // 缩略图最大高度
            $upload_config['thumbPrefix'] = ''; // 缩略图前缀
            $upload_config['thumbPath'] = $save_path_thumb; // 缩略图保存路径
            
            if (!is_dir($upload_config['thumbPath'])) {RKit::mkdirs($upload_config['thumbPath']);}
        }
        
        // 开始上传
        $upload = new UploadFile($upload_config);
        
        // 返回结果
        $result = array();
        $data=array();
        if (!$upload -> upload()) {
            $result = $upload -> getErrorMsg();
            $data['code']=100;
            $data['msg']=$result;
            
        } else {
            $result = $upload -> getUploadFileInfo();
            $file=$result[0];
            unset($file['type']);unset($file['key']);
            $fields['file_md5']=$file['hash'];
            $fields['file_oname']=pathinfo($file['name'], PATHINFO_FILENAME);
            $fields['file_name']=pathinfo($file['savename'], PATHINFO_FILENAME);
            $fields['file_extension']=$file['extension'];
            $fields['file_size']=$file['size'];
            $fields['create_time']=time();
            $fields['file_url'] = FILEHOST . $basePath . "image" . DIRECTORY_SEPARATOR . $upload_path . $file['savename'];
            
            //添加到数据
            $resource = array(
                'size' => $fields["file_size"],
                'oname' => $fields["file_name"],
                'resource_url' => $fields['file_url'],
            );
            $fileId = $this->_addResource($resource);
            
            $data['code']=0;
            $data['msg']='上传成功';
            $data['url']=$fields['file_url'];
            $data['vid']= !empty($vid)?$vid:'';
            $data['title']=$fields['file_oname'];
            $data['ext']=$fields['file_extension'];
            $data['md5']=$fields['file_md5'];
            $data["fileId"] = $fileId;
        }
        RKit::printJson($data);
    }

         
    protected function getWaterConfig($wateType = 1){
        //开始收集参数
        $arr_water = array();
        $arr_water["savename"]='';
        $arr_water["watermarkwidth"] = WATER_WIDTH;//被打水印的图片的最小宽度 少于该尺寸则不加水印
        $arr_water["watermarkheight"] = WATER_HEIGHT;//被打水印的图片的最小高度 少于该尺寸则不加水印
        $arr_water["watermarkpct"] = WATER_PCT; //水印透明度
        $arr_water["watermarkquality"] = WATER_QUALITY; //JPEG水印图像质量
        $arr_water["watermarkpos"] = WATER_POS;//水印位置 
        if($wateType == 1){
            $arr_water["watermarktype"] = 1;//水印类型（图片1或文字0）
            $arr_water["watermarkimg"] = WATER_IMG;//水印图片
        }else{
            $arr_water["watermarktype"] = 0;//水印类型（图片1或文字0）
            $arr_water["watermarktext"] = WATER_TEXT;//水印文字
            $arr_water["watermarkfontsize"] = WATER_FONT_SIZE;//水印文字大小
            $arr_water["watermarkfontcolor"] = WATER_FONT_COLOR;//水印文字颜色
            $arr_water['water_mark_font_family'] = realpath(WATER_FONT_FAMILY);
        }
       
        return $arr_water;
    }
    
    /**
     * 文件存储随机目录，避免一个目录文件过多
     *
     * @param  $type 目录类型 0=默认
     */
    private function rnd_dir($type = 2){
   
        $ret='';
        $str='0123456789abcdefghijklmnopqrstuvwxyz';
        switch($type){
            case 1:
                $ret=date('Y').'/'.date('m').'/'.date('d').'/';
                break;
            case 2:
                $ret=date('Ym').'/'.date('d').'/';
                break;
            default:
                $rnd_dir1=substr($str,rand(0,35),1).substr($str,rand(0,35),1);
                $rnd_dir2=substr($str,rand(0,35),1).substr($str,rand(0,35),1);
                $rnd_dir3=substr($str,rand(0,35),1).substr($str,rand(0,35),1);
                $ret=$rnd_dir1.'/'.$rnd_dir2.'/'.$rnd_dir3.'/';
        }
        return $ret;

    }
    
    public function deleteResouce(){
        $id = $this->getData("resInfoId");
        
        if($this->db->delete($this->resourceInfoTable,array("res_info_id"=>$id))){
            $this->echoAjax(0, '');
        }else{
            $this->echoAjax(100, '删除失败');
        }
    }
}

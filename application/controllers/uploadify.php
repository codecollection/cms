<?php
/*
 * MCMS Copyright (c) 2012-2013 ZhangYiYeTai Inc.
 * 
 *  http://www.mcms.cc
 * 
 * The program developed by loyjers core architecture, individual all rights reserved, 
 * if you have any questions please contact loyjers@126.com
 */
$session_name = session_name();
if (!isset($_POST[$session_name])) {
    die('{"code":1,"msg":"没有传递用户标识"}');
} else {
    session_id($_POST[$session_name]);
    session_start();
}

require_once(dirname(__FILE__) . "/../../init.php"); //公用引导启动文件
require_once(dirname(__FILE__) . "/../../class/img.class.php");
require_once(dirname(__FILE__) . "/../../class/upload.class.php");

// 验证
$verifyToken = md5(UPLOAD_VERIFY . $_POST['timestamp']);
if (empty($_FILES) || $_POST['token'] != $verifyToken) die('{"code":1,"msg":"上传数据提交失败"}');

//登录用户才可以上传
if (!isset($_SESSION['user']) || !is_array($_SESSION['user'])) die('{"code":1,"msg":"没有上传权限"}');


$dbm=new db_mysql();
// 判断文件重复
$sql="select * from ".TB_PRE."file where file_md5='".md5_file($_FILES['Filedata']['tmp_name'])."' limit 1";
$rs=$dbm->query($sql);
if(count($rs['list'])==1){
    $file=$_FILES['Filedata'];
    $data['code']=0;
    $data['msg']='上传成功';
    $data['url']=$rs['list'][0]['file_url'];
    $data['vid']=isset($_POST['vid'])?$_POST['vid']:'';
    $data['title']=pathinfo($file['name'], PATHINFO_FILENAME);
    $data['ext']=$rs['list'][0]['file_extension'];
    $data['md5']=$rs['list'][0]['file_md5'];
    die(H::json_encode_ch($data));
}

$file_size=$_FILES['Filedata']['size'];//文件大小
if($file_size>=1024*1024*100){
    $file_type='big';
}else{
    $file_type='small';
}

// 上传目录自定义
if (isset($_POST['dir'])) {
    $upload_path=$_POST['dir'];
}else{
    $upload_path="files";
}
//避免JS传入不允许的目录
$upload_path=str_replace(array('.','/'),'',$upload_path);

$file_types = explode(',',UPLOAD_EXT); // File extensions

// 接收图片上传
$rnd_path=H::rnd_save_path();
$save_path = './../'.SKIN.'/'.$upload_path.'/'.$file_type.'/'.$rnd_path;//保存路径
$save_path_thumb='./../'.SKIN.'/preview/'.$upload_path.'/'.$file_type.'/'.$rnd_path;//缩略图

$upload_config = array();
$upload_config['savePath'] = $save_path; //图片保存路径
$upload_config['maxSize'] = 1024*1024*10;
$upload_config['allowExts'] = $file_types;

// 判断图片保存文件夹是否存在，不存在则创建
if (!is_dir($upload_config['savePath'])) H :: mkdirs($upload_config['savePath']);

//是否打水印
if(defined('WATER_MARK_ENABLE') && WATER_MARK_ENABLE && isset($_POST['water'])){
    if(in_array(strtolower(pathinfo($_FILES['Filedata']['name'],PATHINFO_EXTENSION)),array('gif','jpg','jpeg','png','bmp'))) {
        //开始收集参数
        $arr_water_water = array();
        $arr_water["savename"]='';
        $arr_water["watermarktype"] = 1;//水印类型（图片1或文字0）
        $arr_water["watermarkwidth"] = WATER_MARK_WIDTH;//被打水印的图片的最小宽度 少于该尺寸则不加水印
        $arr_water["watermarkheight"] = WATER_MARK_HEIGHT;//被打水印的图片的最小高度 少于该尺寸则不加水印
        $arr_water["watermarkimg"] = WATER_MARK_IMG;//水印图片
        $arr_water["watermarkpct"] = WATER_MARK_PCT; //水印透明度
        $arr_water["watermarkquality"] = WATER_MARK_QUALITY; //JPEG水印图像质量
        $arr_water["watermarkpos"] = WATER_MARK_POS;//水印位置
        //print_r($arr_water);
        $upload_config['water'] = $arr_water;
    }
}


// 是否生成缩略图
$thumb_width=isset($_POST['thumb_width'])?intval($_POST['thumb_width']):0;
$thumb_height=isset($_POST['thumb_height'])?intval($_POST['thumb_height']):0;
if ($thumb_width>0 && $thumb_height>0 ) {
    $upload_config['thumb'] = true; //是否生成缩略图
    $upload_config['thumbMaxWidth'] = $thumb_width; // 缩略图最大宽度
    $upload_config['thumbMaxHeight'] = $thumb_height; // 缩略图最大高度
    $upload_config['thumbPrefix'] = ''; // 缩略图前缀
    $upload_config['thumbPath'] = $save_path_thumb; // 缩略图保存路径
    if (!is_dir($upload_config['thumbPath'])) H :: mkdirs($upload_config['thumbPath']);
}else{
    //图片自动生成缩略图 300*300
    if(in_array(strtolower(pathinfo($_FILES['Filedata']['name'],PATHINFO_EXTENSION)),array('gif','jpg','jpeg','png','bmp'))){
        $upload_config['thumb'] = true; //是否生成缩略图
        $upload_config['thumbMaxWidth'] = 300; // 缩略图最大宽度
        $upload_config['thumbMaxHeight'] = 300; // 缩略图最大高度
        $upload_config['thumbPrefix'] = ''; // 缩略图前缀
        $upload_config['thumbPath'] = $save_path_thumb; // 缩略图保存路径
        if (!is_dir($upload_config['thumbPath'])) H :: mkdirs($upload_config['thumbPath']);
    }
}
//print_r($_POST);
// 开始上传
$upload = new UploadFile($upload_config);
// 返回结果
$result = array();
$data=array();
if (!$upload -> upload()) {
    $result = $upload -> getErrorMsg();
    $data['code']=1;
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
    $fields['file_url']=DOMAIN_UPLOAD.substr($file['savepath'],4).$file['savename'];
    $fields=H::sqlxss($fields);
    $dbm->single_insert(TB_PRE.'file',$fields);

    $data['code']=0;
    $data['msg']='上传成功';
    $data['url']=$fields['file_url'];
    $data['vid']=isset($_POST['vid'])?$_POST['vid']:'';
    $data['title']=$fields['file_oname'];
    $data['ext']=$fields['file_extension'];
    $data['md5']=$fields['file_md5'];
}
die(H::json_encode_ch($data));
?>
<?php
if (!defined('BASEPATH')) exit('No direct script access allowed'); 
/* 
 * 基本操作类
 */

class RKit {
    
    const PASSWORD_KEY = 'Kmauwnvsdiuhg4(90{Asdfwe';


    static $loadedFiles = array();//已载入的文件列表
    /**
        * 输出JSON数据
        *
        * @param string  $value
        * @param boolean $autoEncode  是否自动对参数进行JSON编码
        */
    public static function printJson($value, $autoEncode = true) {

        header("Status: 200");
        header("Cache-Control: no-cache");
        header("Expires: -1");
        header("Content-type: text/html; charset=utf-8");

        echo $autoEncode ? json_encode($value) : $value;
        die();
    }
    
    /**
     * 取得格式化的字符串
     * @param int $time
     * @return string
     */
    public static function formatTime($time) {
        
        if (!$time) {
            return '';
        }
        
        $timeDay = (int)date('d', $time);
        $timeMonth = (int)date('m', $time);
        $timeYear = (int)date('Y', $time);
        
        $nowDay = (int)date('d');
        $nowMonth = (int)date('m');
        $nowYear = (int)date('Y');
        
        $part = date('H:i:s', $time);
        
        $timeStr = '';
        if ($timeYear == $nowYear && $timeMonth == $nowMonth && $timeDay == $nowDay) {
            $timeStr = '今天 ' . $part;
        } else if ($timeYear == $nowYear && $timeMonth == $nowMonth && $timeDay == ($nowDay-1)) {
            $timeStr = '昨天 ' . $part;
        } elseif ($timeYear == $nowYear && $timeMonth == $nowMonth && $timeDay == ($nowDay-2)) {
            $timeStr = '前天 ' . $part;
        } elseif ($timeYear == $nowYear && $timeMonth == $nowMonth) {
            $timeStr = '本月 ' . $timeDay . '号' . $part;
        } elseif ($timeYear == $nowYear && $timeMonth == ($nowMonth - 1)) {
            $timeStr = '上月 ' . $timeDay . '号' . $part;
        } else if ($timeYear == $nowYear) {
            $timeStr = '今年 ' . $timeMonth . '-' . $timeDay . $part;
        } else if ($timeYear == ($nowYear-1)) {
            $timeStr = '去年 ' . $timeMonth . '-' . $timeDay . $part;
        } else {
            $timeStr = $timeYear . '-' . $timeMonth . '-' . $timeDay . $part;
        }
        
        return $timeStr;
    }

    /**
     * 显示视图
     * @param string $viewName
     * @param array $data
     */
    public static function showView($viewName, $data = array()) {
     
        $ci = &get_instance();
        $ci->load->view("admin/frame", array('viewName' => $viewName, 'data' => $data));
    }
    
    /**
     * 取得分页代码
     * @param string $baseUrl
     * @param int $total
     * @return string
     */
    public static function getPageLink($baseUrl, $total) {
        
        $ci = &get_instance();
        $config = array(
            'base_url' => $baseUrl, 
            'per_page' => PAGESIZE,
            'total_rows' => $total,
            'num_links' => 4,
            'query_string_segment' => 'p',
            'page_query_string' => true,
            'first_link' => "首页",
            'last_link' => "尾页",
            'prev_link' => '上一页',
            'next_link' => '下一页',
            'cur_tag_open' => '<a class="z-crt">',
            'cur_tag_close' => '</a>',
            'use_page_numbers' => TRUE,
        );
        $ci->pagination->initialize($config);
        
        return $ci->pagination->create_links();
    }
    
    /**
     * 写入日志
     * @param type $module_identity
     * @param type $msg
     * @param type $data
     * @return boolean
     */
    public static function appendFileLog($userId, $userName, $module_identity, $msg) {
        
        $content = array(
            'employment_id' => $userId,
            'name'          => $userName,
            'content'       => $msg,
            'create_time'  => time(),
            'module_identity' => $module_identity,
            'request_data'  => var_export(array(
                'post' => $_POST,
                'get'  => $_GET,
                'cookie'=> $_COOKIE,
                'file' => $_FILES,
            ), true),
            'ip'           => $_SERVER['REMOTE_ADDR'],
            'user_agent'    => $_SERVER['HTTP_USER_AGENT'],
        );
        
        $path = realpath('.') . '/files/logs/' . date('Ym');
        if (!is_dir($path)) {
            $old = umask(0);
            mkdir($path, 0777, true);
            umask($old);
        }
        
        $path .= '/' . date('d');
        
        file_put_contents($path, base64_encode(json_encode($content)) . "\n", FILE_APPEND);
        return true;
    }
    
    /**
     * 取得某一天的日志内容
     * @param int $date
     * @param boolean $isClean  取得内容后是否删除文件内容
     * @return array
     */
    public static function getFileLog($date, $isClean = false) {
        
        $date = str_split($date, 6);
        
        $path = realpath('.') . '/files/logs/' . $date[0] . '/' . $date[1];
        $content = file($path);
        if ($isClean) {
            @unlink($path);
        }
        
        $return = array();
        foreach ($content as $line) {
            $return[] = json_decode(base64_decode($line), true);
        }

        return $return;
    }
    
    /**
     * 取得提交的数据
     * @return array
     */
    public static function getData() {
        
        $ci = & get_instance();
        
        $return = array();
        $fields = func_get_args();
        foreach ($fields as $value) {
            $return[$value] = trim($ci->input->get_post($value));
        }
        
        return $return;
    }

    /**
     * 生成64位的认证码
     *
     * @param string $feature  特征字符串
     */
    public static function generateAuthKey($feature) {

        $key1 = md5(uniqid(rand(), true));
        $key = strtoupper(md5($feature) . $key1);

        return $key;
    }

    /**
     * 生成一个MD5的密码
     *
     * @param  string $name
     * @param  string $password
     * @return string
     */
    public static function generateMd5Password($name, $password) {

        return strtoupper(md5($name . self::PASSWORD_KEY . $password));
    }
	
    /**
     * 过滤数据，只允许特定的数据通过
     *
     * @param  array $data        过滤的数据数组
     * @param  array $allowField　只允许通过的字段
     * @return 返回过滤后的字符串
     */
    public static function restrictEditor($data, $allowField) {

        foreach ($data as $key => $value) {
            if (!in_array($key, $allowField)) {
                unset($data[$key]);
            }
        }

        return $data;
    }

    /**
     * 检测是否为一个合法的名称，有效的名称可包括：汉字、字母、数字、下划线
     *
     * @param  string $name
     * @return boolean  为合法的名称返回true，否则返回false
     */
    public static function validName($name) {

        return (boolean)preg_match("#^[\x{4e00}-\x{9fa5}a-zA-Z0-9_]{2,20}$#u", $name);
    }

    /**
     * 格式化字符串$str，当不足位数$len，前置补字符$char
     *
     * @param  string  $str
     * @param  integer $len
     * @return string
     */
    public static function formatLengthString($str, $len, $char = '0') {

        $str = (string)$str;
        $strLen = strlen($str);
        if ($strLen < $len) {
            $str = str_repeat($char, $len-$strLen) . $str;
        }
        
        return $str;
    }
	
    /**
     * 对上传的附件进行操作
     *
     * @param  string  $action  upload/delete
     * @param  array   $data    配置数据
     * @param  boolean $isArchiveStore  是否根据年月创建子目录，以便归档存储方便管理
     * 
     * @return boolean/string  如果是上传，成功后返回上传的路径，失败返回false，如果是删除附件，则成功true，失败false
     */
    public static function doAttachment($action, $data, $isArchiveStore = true) {

        $ci = & get_instance();

        if (!isset($data['BasePath'])) {
            $data['BasePath'] = DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR;
        }

        if ('upload' == $action) {

            if (!isset($data['Field'])) {//未指定上传的字段
                return false;
            }

            if (!isset($_FILES[$data['Field']])) {//没有上传数据
                return false;
            }

            if (!isset($data['Type'])) {
                $data['Type'] = '*'; //gif|jpeg|jpg|png|mp4|pdf
            }

            if (!isset($data['Size'])) {
                $data['Size'] = '1024000';
            }

            if ($isArchiveStore) {//创建目录
                $path = $data['BasePath'] . date('Ym');
                $absPath = realpath('.') . $path;
                if (!is_dir($absPath)) {
                    mkdir($absPath, 0777, true);
                }
            } else {
                $path = $data['BasePath']; 
                $absPath = realpath('.') . $path;
            }
            $config['upload_path'] = $absPath;
            $config['allowed_types'] = $data['Type'];
            $config['max_size']	= $data['Size'];
            
            if (!isset($data['isRename']) || $data['isRename']) {
                $config['file_name'] = md5(microtime() . rand(1, 10000)) . '.' . pathinfo($_FILES[$data['Field']]['name'], PATHINFO_EXTENSION);
            } else {
                $config['file_name'] = $_FILES[$data['Field']]['name'];
            }
            
            $ci->load->library('upload',$config);
            
            if (!$ci->upload->do_upload($data['Field'])) { 
                //print_r($_FILES);
                //print_r($ci->upload->display_errors());
                return false;
            } else {
                return $path . DIRECTORY_SEPARATOR . $config['file_name'];
            }

        } elseif ('delete' == $action) {//清除附件
            $fileName = $ci->security->sanitize_filename($data['FileName'], true);

            //检测被删除的文件是否属于广告附件目录里的文件
            if (strcasecmp(substr($data['FileName'], 0, strlen($data['BasePath'])), $data['BasePath']) === 0) {

                $path = realpath('.') . DIRECTORY_SEPARATOR . ltrim($data['FileName'], '/\\');
                if (is_writeable($path) && is_file($path)) {
                    @unlink($path);
                }
            }

            return true;
        }
    }
	
    /**
     * 返回文件上传时候文件的存放目录
     * 
     * @param type $fileName 文件名称
     * @param string $basepath 基本路劲
     * @param type $isArchiveStore 是否创建
     * @return type string
     */
    public static function getUploadFileDir($fileName,$basepath = null,$isArchiveStore = true){
        if ($basepath === null) {
            $basepath = DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR;
        }
        
        if ($isArchiveStore) {//创建目录
            
            $path = $basepath . date('Ym');
            $absPath = realpath('.') . $path;

            if (!is_dir($absPath)) {
                
                mkdir($absPath,0777,true);
            }
        } else {
            $path = $basepath; 
            $absPath = realpath('.') . $path;
        }
        //echo($path . DIRECTORY_SEPARATOR . $fileName);
        return $path . DIRECTORY_SEPARATOR . $fileName;
    }

    /**
     * 批量上传附件
     *
     * @param  array $fields  要上传的附件字段域名称列表数组
     * @param  string $basePath  保存路径基准路径
     * @return array  返回上传的路径数组，如果未上传成功，则返回0个元素的数组
     */
    public static function batchAttachment(array $fields, $basePath = NULL) {

        if (NULL !== $basePath) {
            if (false === strpos($basePath, DIRECTORY_SEPARATOR)) {//指定的基准目录没有 / 字符，表示基于上传目录
                $uploadPath = DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR . $basePath . DIRECTORY_SEPARATOR;
            }
        }

        $list = array();
        if (count($fields) > 0) {

            $path = '';
            foreach ($fields as $uploadName) {
                $path = RApiKit::doAttachment('upload', array('Field' => $uploadName, 'BasePath' => $uploadPath));
                if (false === $path) {
                    continue;
                }
                $list[] = $path;
            }
        }

        return $list;
    }
    
    /**
     * 把字符串转化成对应的编码格式
     * @param type $str
     * @param type $char
     * @return type
     */
    public static function getCharset($str,$char = 'utf-8'){
        return mb_convert_encoding($str,$char);
    }
    
    /**
     * 初始化邮件发送配置
     */
    public static function initEmail(){
        $ci = &get_instance();
        
        $this->load->library('email');
        
        $this->config->load('smtp');
        $smtpConfig = $ci->config->item('smtp');
        
        $this->email->initialize($smtpConfig);
    }
    
    /**
     * 发送邮件
     * @param array/string $to  
     * @param string $title 
     * @param string $msg
     * @param array $params
     * @return boolean
     */
    public static function sendMail($to, $title, $msg, $params = array()) {
        
        $ci = &get_instance();
        
        $ci->load->library('email');
        $ci->config->load('smtp');
        $smtpConfig = $ci->config->item('smtp');
        
        $ci->email->initialize($smtpConfig);
        $ci->email->clear(true);
        
        if (!isset($params['fromName'])) {
            $params['fromName'] = $smtpConfig['from_name'];
        }
        if (!isset($params['fromMail'])) {
            $params['fromMail'] = $smtpConfig['from_email'];
        }
        
        if (isset($params['cc'])) {
            $ci->email->cc($params['cc']);
        }
        if (isset($params['bcc'])) {
            $ci->email->bcc($params['bcc']);
        }

        $ci->email->from($params['fromMail'], $params['fromName']);
        $ci->email->to($to);
        $ci->email->subject($title);
        
        $ci->email->message($msg);
        if (isset($params['files'])) {
            foreach ((array)$params['files'] as $file) {
                if (file_exists($file)) {
                    $ci->email->attach($file);
                }
            }
        }
        
        if($ci->email->send()){
            return true;
        } else {
            //echo $ci->email->print_debugger();
            return false;
        }
        
    }
    
    /**
     * 发送短消息
     * @param type $mobile
     * @param string $text
     * @return type
     */
    public static function sendSMS($mobile, $text) {
        
        $text .= lang("COMPANY_TITLE_SMS");
        
        self::loadFile(APPPATH . "libraries/sms/sms.inc.php");
        $newclient=new SMS();
        
	$newclient->sendSMS($mobile, iconv("UTF-8","GB2312//IGNORE",$text), time(), 0);

        return true;
    }
    
     /**
     * 载入文件
     * @param type $path
     * @return boolean
     */
    public static function loadFile($path) {
        
        if (isset(self::$loadedFiles[$path])) {
            return false;
        }
        
        self::$loadedFiles[$path] = true;
        require $path;
    }
   
    
    /**
     * 输出HTML表单
     * @param $params 参数数组 array('node'=>'','type'=>'','default'=>'')
     * @param =>type 表单类型 select,checkbox,radio
     * @param =>node    节点
     * @param =>default 默认选中
     * @param =>name    表单名称后缀，用于一个页面多次出现时候区分
     * @param =>alias 别名，用于同值但是文字相同的表单
     * @param =>stype 模拟下拉框的样式
     * @param =>on 表单函数 click,change等
     */
    public static function input_str($params,$fields) {
        // 初始化
        $node = isset($params['node'])?$params['node']:'';
        $type = isset($params['type'])?$params['type']:'select';
        $default = isset($params['default'])?$params['default']:'';
        $name = isset($params['name'])?$params['name']:'';
        $on = isset($params['on'])?$params['on']:'';
        $alias = isset($params['alias'])?$params['alias']:'';
        $style = isset($params['style'])?$params['style']:'style="width:120px"';
        
        // 下拉框
        if ($type == 'select') {
            $html = '<select name="' . ($alias==''?$node.$name:$alias.$name) . '" '.$on.' id="' . $node . $name . '">';
            foreach($fields as $f) {
                $select = '';
                if (strlen($default) > 0 && $f['value'] == $default) $select = ' selected';
                $html .= '<option value="' . $f['value'] . '"' . $select . '>' . $f['txt'] . '</option>';
            }
            $html .= '</select>';
            return $html;
        }
        // 单选框
        if ($type == 'radio') {
            $html = '';
            foreach($fields as $f) {
                $select = '';
                if (strlen($default) > 0 && $f['value'] == $default) $select = ' checked';
                $html .= '&nbsp;&nbsp;<input type="radio" '.$on.' name="' . ($alias==''?$node.$name:$alias.$name) . '" value="' . $f['value'] . '"' . $select . '>&nbsp;' . $f['txt'] . '';
            }
            return $html;
        }
        // 复选框
        if ($type == 'checkbox') {
            $html = '';
            foreach($fields as $f) {
                $select = '';
                $df_val=explode(',',$default);
                if (strlen($default) > 0 && in_array($f['value'],$df_val)) $select = ' checked';
                $html .= '<span class="cbx_wrap"><input '.$on.' type="checkbox"  class="' . ($alias==''?$node.$name:$alias.$name) . '" name="' . ($alias==''?$node.$name:$alias.$name) . '" value="' . $f['value'] . '"' . $select . '><label for="' . $node . $name . '">&nbsp;&nbsp;' . $f['txt'] . '&nbsp;&nbsp;</label></span>';
            }
            return $html;
        }
        // 模拟下拉单选框
        if($type=='select_single'){
            $html = '<div class="sel_box" onclick="select_single(event,this'.(empty($on)?'':',\''.$on.'\'').');return false;" '.$style.'>';
            $html .= '    <a href="javascript:void(0);" class="txt_box" id="txt_box">';
            $html .= '        <div class="sel_inp" id="sel_inp">'.$fields[$default]['txt'].'</div>'; //$this->get_field_str($node,$default)
            $html .= '        <input type="hidden" name="'.($alias==''?$node.$name:$alias.$name).'" id="'.($alias==''?$node.$name:$alias.$name).'" value="'.$default.'" class="sel_subject_val">';
            $html .= '    </a>';
            $html .= '    <div class="sel_list" id="sel_list" style="display:none;">';
            foreach($fields as $f) {
                $select = '';
                if (strlen($default) > 0 && $f['value'] == $default) $select = 'current';
                $html .= '        <a href="javascript:void(0);" value="' . $f['value'] . '" class="'.$select.'" '.$on.'>' . $f['txt'] . '</a>';
            }
            $html .= '    </div>';
            $html .= '</div>';
            return $html;
        }
        // 模拟下拉多选框
        if($type=='select_multi'){
            $html = '<div class="sel_box duo_sel_box"  '.$style.'>';
            $html .= '        <input type="hidden" name="'.($alias==''?$node.$name:$alias.$name).'" id="'.($alias==''?$node.$name:$alias.$name).'" value="'.$default.'" class="sel_subject_val">';
            $html .= '<div class="sel_list" id="sel_list">';
            foreach($fields as $f) {
                $select = '';
                if (strlen($default) > 0 && in_array($f['value'], explode(',',$default))) $select = 'current';
                $html .= '        <a href="javascript:void(0);"  value="' . $f['value'] . '" class="'.$select.'" '.$on.'>' . $f['txt'] . '</a>';
            }
            $html .= '</div>';
            $html .= '</div>';
            return $html;
            }
        return '-';
    }
}
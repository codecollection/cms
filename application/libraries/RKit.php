<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * 基本操作类
 */

class RKit {

    const PASSWORD_KEY = 'Kmauwnvsdiuhg4(90{Asdfwe';

    static $loadedFiles = array(); //已载入的文件列表

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

        $timeDay = (int) date('d', $time);
        $timeMonth = (int) date('m', $time);
        $timeYear = (int) date('Y', $time);

        $nowDay = (int) date('d');
        $nowMonth = (int) date('m');
        $nowYear = (int) date('Y');

        $part = date('H:i:s', $time);

        $timeStr = '';
//        if ($timeYear == $nowYear && $timeMonth == $nowMonth && $timeDay == $nowDay) {
//            $timeStr = '今天 ' . $part;
//        } else if ($timeYear == $nowYear && $timeMonth == $nowMonth && $timeDay == ($nowDay-1)) {
//            $timeStr = '昨天 ' . $part;
//        } elseif ($timeYear == $nowYear && $timeMonth == $nowMonth && $timeDay == ($nowDay-2)) {
//            $timeStr = '前天 ' . $part;
//        } elseif ($timeYear == $nowYear && $timeMonth == $nowMonth) {
//            $timeStr = '本月 ' . $timeDay . '号' . $part;
//        } elseif ($timeYear == $nowYear && $timeMonth == ($nowMonth - 1)) {
//            $timeStr = '上月 ' . $timeDay . '号' . $part;
//        } else if ($timeYear == $nowYear) {
//            $timeStr = '今年 ' . $timeMonth . '-' . $timeDay . $part;
//        } else if ($timeYear == ($nowYear-1)) {
//            $timeStr = '去年 ' . $timeMonth . '-' . $timeDay . $part;
//        } else {
//            $timeStr = $timeYear . '-' . $timeMonth . '-' . $timeDay . $part;
//        }
        if ($timeYear == $nowYear && $timeMonth == $nowMonth && $timeDay == $nowDay) {
            $timeStr = '今天 ';
        } else if ($timeYear == $nowYear && $timeMonth == $nowMonth && $timeDay == ($nowDay - 1)) {
            $timeStr = '昨天 ';
        } elseif ($timeYear == $nowYear && $timeMonth == $nowMonth && $timeDay == ($nowDay - 2)) {
            $timeStr = '前天 ';
        } else {
            $timeStr = $timeYear . '-' . $timeMonth . '-' . $timeDay;
        }
        return $timeStr;
    }

    /**
     * 显示视图
     * @param string $viewName
     * @param array $data
     */
//    public static function showView($viewName, $data = array()) {
//     
//        $ci = &get_instance();
//        $ci->load->view("admin/frame", array('viewName' => $viewName, 'data' => $data));
//    }

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

        return (boolean) preg_match("#^[\x{4e00}-\x{9fa5}a-zA-Z0-9_]{2,20}$#u", $name);
    }

    /**
     * 格式化字符串$str，当不足位数$len，前置补字符$char
     *
     * @param  string  $str
     * @param  integer $len
     * @return string
     */
    public static function formatLengthString($str, $len, $char = '0') {

        $str = (string) $str;
        $strLen = strlen($str);
        if ($strLen < $len) {
            $str = str_repeat($char, $len - $strLen) . $str;
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
            $config['max_size'] = $data['Size'];

            if (!isset($data['isRename']) || $data['isRename']) {
                $config['file_name'] = md5(microtime() . rand(1, 10000)) . '.' . pathinfo($_FILES[$data['Field']]['name'], PATHINFO_EXTENSION);
            } else {
                $config['file_name'] = $_FILES[$data['Field']]['name'];
            }

            $ci->load->library('upload', $config);

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
    public static function getUploadFileDir($fileName, $basepath = null, $isArchiveStore = true) {
        if ($basepath === null) {
            $basepath = DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR;
        }

        if ($isArchiveStore) {//创建目录
            $path = $basepath . date('Ym');
            $absPath = realpath('.') . $path;

            if (!is_dir($absPath)) {

                mkdir($absPath, 0777, true);
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
    public static function getCharset($str, $char = 'utf-8') {
        return mb_convert_encoding($str, $char);
    }

    /**
     * 初始化邮件发送配置
     */
    public static function initEmail() {
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
            foreach ((array) $params['files'] as $file) {
                if (file_exists($file)) {
                    $ci->email->attach($file);
                }
            }
        }

        if ($ci->email->send()) {
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
        $newclient = new SMS();

        $newclient->sendSMS($mobile, iconv("UTF-8", "GB2312//IGNORE", $text), time(), 0);

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
     * 把txt:加粗,value:1|txt:不加粗,value:0  0:不加粗,1加粗|0:不加粗,1加粗  转成数组 array(array(txt=不加粗，value=0),array(txt=加粗，value=0))
     * 
     * @param type $str
     * @return type
     */
    public static function strToArray($str) {

        $return = array();

        $strArray = json_decode($str, true);

        foreach ($strArray as $k => $v) {
            $arr['txt'] = $v;
            $arr['value'] = $k;
            array_push($return, $arr);
        }

        return $return;
    }

    /**
     * 
     * 获取到请求路径的地址
     * @param type $url
     * @param type $isJson 请求到的数据是否是json格式的。如果是就转成数组
     * @return type
     */
    public static function getUrlData($url = "", $isJson = true) {

        $dataRes = file_get_contents($url);

        if ($isJson) {
            $data = json_decode($dataRes, true);
        } else {
            $data = $dataRes;
        }

        return $data;
    }

    /**
     * 检测是否手机号码
     * @param type $mobile
     * @return type
     */
    public static function isMobile($mobile) {

        return preg_match("/1[358]{1}\d{9}$/", $mobile);
    }

    /**
     * 判断是否为邮箱
     * @param type $email
     * @return type
     */
    public static function isMail($email) {

        return strlen($email) > 6 && preg_match("/^[\w\-\.]+@[\w\-]+(\.\w+)+$/", $email);
    }

    /**
     * 检测用户的绑定类型
     * @param type $bindValue
     * @return int
     */
    public static function getUserBindType($bindValue) {

        $type = 0;
        if (self::isMobile($bindValue)) {
            $type = 2;
        } elseif (self::isMail($bindValue)) {
            $type = 3;
        } else {
            $type = 1;
        }

        return $type;
    }

    /**
     * 中文字符截取
     *
     * @param  $str 要截取字符串
     * @param  $start 开始位置
     * @param  $length 长度
     */
    public static function utf8_substr($str, $start, $length, $code = "UTF-8") {
        if (function_exists('mb_substr')) {
            return mb_substr($str, $start, $length, $code);
        }
    }

    /**
     * 创建文件夹
     * @param type $dir
     * @return boolean
     */
    public static function mkdirs($dir) {
        if (!is_dir($dir)) {
            if (!self::mkdirs(dirname($dir))) {
                return false;
            }
            if (!mkdir($dir, 0777)) {
                return false;
            }
        }
        return true;
    }

    /**
     *   
     * 根据php的$_SERVER['HTTP_USER_AGENT'] 中各种浏览器访问时所包含各个浏览器特定的字符串来判断是属于PC还是移动端  
     * @author           discuz3x  
     * @lastmodify    2014-04-09  
     * @return  BOOL  
     */
    public static function checkmobile() {
        global $_G;
        $mobile = array();
        //各个触控浏览器中$_SERVER['HTTP_USER_AGENT']所包含的字符串数组  
        static $touchbrowser_list = array('iphone', 'android', 'phone', 'mobile', 'wap', 'netfront', 'java', 'opera mobi', 'opera mini',
            'ucweb', 'windows ce', 'symbian', 'series', 'webos', 'sony', 'blackberry', 'dopod', 'nokia', 'samsung',
            'palmsource', 'xda', 'pieplus', 'meizu', 'midp', 'cldc', 'motorola', 'foma', 'docomo', 'up.browser',
            'up.link', 'blazer', 'helio', 'hosin', 'huawei', 'novarra', 'coolpad', 'webos', 'techfaith', 'palmsource',
            'alcatel', 'amoi', 'ktouch', 'nexian', 'ericsson', 'philips', 'sagem', 'wellcom', 'bunjalloo', 'maui', 'smartphone',
            'iemobile', 'spice', 'bird', 'zte-', 'longcos', 'pantech', 'gionee', 'portalmmm', 'jig browser', 'hiptop',
            'benq', 'haier', '^lct', '320x320', '240x320', '176x220');
        //window手机浏览器数组【猜的】  
        static $mobilebrowser_list = array('windows phone');
        //wap浏览器中$_SERVER['HTTP_USER_AGENT']所包含的字符串数组  
        static $wmlbrowser_list = array('cect', 'compal', 'ctl', 'lg', 'nec', 'tcl', 'alcatel', 'ericsson', 'bird', 'daxian', 'dbtel', 'eastcom',
            'pantech', 'dopod', 'philips', 'haier', 'konka', 'kejian', 'lenovo', 'benq', 'mot', 'soutec', 'nokia', 'sagem', 'sgh',
            'sed', 'capitel', 'panasonic', 'sonyericsson', 'sharp', 'amoi', 'panda', 'zte');
        $pad_list = array('pad', 'gt-p1000');
        $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);
        if (dstrpos($useragent, $pad_list)) {
            return false;
        }
        if (($v = dstrpos($useragent, $mobilebrowser_list, true))) {
            $_G['mobile'] = $v;
            return '1';
        }
        if (($v = dstrpos($useragent, $touchbrowser_list, true))) {
            $_G['mobile'] = $v;
            return '2';
        }
        if (($v = dstrpos($useragent, $wmlbrowser_list))) {
            $_G['mobile'] = $v;
            return '3'; //wml版  
        }
        $brower = array('mozilla', 'chrome', 'safari', 'opera', 'm3gate', 'winwap', 'openwave', 'myop');
        if (dstrpos($useragent, $brower))
            return false;
        $_G['mobile'] = 'unknown';
        //对于未知类型的浏览器，通过$_GET['mobile']参数来决定是否是手机浏览器  
        if (isset($_G['mobiletpl'][$_GET['mobile']])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 判断$arr中元素字符串是否有出现在$string中  
     * @param  $string     $_SERVER['HTTP_USER_AGENT']   
     * @param  $arr          各中浏览器$_SERVER['HTTP_USER_AGENT']中必定会包含的字符串  
     * @param  $returnvalue 返回浏览器名称还是返回布尔值，true为返回浏览器名称，false为返回布尔值【默认】  
     * @author           discuz3x  
     * @lastmodify    2014-04-09  
     */
    public function dstrpos($string, $arr, $returnvalue = false) {
        if (empty($string)) {
            return false;
        }

        foreach ((array) $arr as $v) {
            if (strpos($string, $v) !== false) {
                $return = $returnvalue ? $v : true;
                return $return;
            }
        }
        return false;
    }

    /**
     * 根据UserAgent检查用户浏览设备
     * @return pc 默认为PC，wap 手机  wx 微信
     */
    public static function user_device() {
        $dev = 'front';
        $regex_match = "/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
        $regex_match .= "htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|meizu|miui|ucweb";
        $regex_match .= "blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
        $regex_match .= "symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
        $regex_match .= "jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
        $regex_match .= ")/i";

        if (isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE']) || (isset($_SERVER['HTTP_USER_AGENT']) && preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT'])))) {
            $dev = 'wap';
        }
        //判断是否是微信浏览
        if (isset($_SERVER['HTTP_USER_AGENT']) && strstr($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')) {
            $dev = 'wap'; //$dev = "weixin"
        }
        //判断是否COOKIE设置了当前浏览设备
        if (isset($_COOKIE['device']) && $_COOKIE['device'] != ''){ return $_COOKIE['device']; }
           
        return $dev;
    }


    /**
     * JSON_ENCODE中文不编码，显示纯中文
     */
    public static function json_encode_ch($a = false) {
        if (is_null($a)) return 'null';
        if ($a === false) return 'false';
        if ($a === true) return 'true';
        if (is_scalar($a)) {
            if (is_float($a)) {
                // Always use "." for floats.
                return floatval(str_replace(",", ".", strval($a)));
            }

            if (is_string($a)) {
                static $jsonReplaces = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
                return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"';
            } else {
                return $a;
            }
        }

        $isList = true;
        for ($i = 0, reset($a); $i < count($a); $i++, next($a)) {
            if (key($a) !== $i) {
                $isList = false;
                break;
            }
        }

        $result = array();
        if ($isList) {
            foreach ($a as $v) $result[] = self::json_encode_ch($v);
            return '[' . join(',', $result) . ']';
        } else {
            foreach ($a as $k => $v) $result[] = self::json_encode_ch($k).':'.self::json_encode_ch($v);
            return '{' . join(',', $result) . '}';
        }
    }
}
